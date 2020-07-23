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
        View::composer('*', function ($view) {
            $view->with('tags', Cache::remember('posts', 5 * 60/* cache expired time(mins) */, function () {
                return Tag::all(['id', 'name']);
            }));
        });

        $latestposts = Post::orderBy('created_at', 'desc')->take(5)->get();


        View::share(['latestposts'=>$latestposts]);
    }
}
