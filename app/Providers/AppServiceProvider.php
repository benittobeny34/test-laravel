<?php

namespace App\Providers;
use App\Charts\MonthWiseChart;
use App\Tag;
use ConsoleTVs\Charts\Registrar as Charts;
use DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Log;


class AppServiceProvider extends ServiceProvider
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
    public function boot(Charts $charts)
    {
         DB::listen(function($query) {
            Log::info(
                $query->sql,
                $query->bindings,
                $query->time
            );
        });
                 $charts->register([
            \App\Charts\UserChart::class,
            \App\Charts\MonthWiseChart::class,
            \App\Charts\YearWiseChart::class,
        ]);
    }
}