<?php

namespace App\Providers;

use App\Post;
use App\Tag;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use DB;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ///* cache expired time(mins) */
        View::composer('*', function ($view) {   
            $view->with('tags', Cache::remember('posts', 5 * 60, function () {
                return Tag::withCount('posts')->orderBy('posts_count','desc')->take(5)->get(); ;
            }));
        });

        $latestposts = Post::orderBy('created_at', 'desc')->take(5)->get();


        View::share(['latestposts'=>$latestposts]);

    }
}
