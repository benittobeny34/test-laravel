<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Post;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonthWiseChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $data =   Post::select(DB::raw("DATE_FORMAT(created_at,'%M %Y') as months,count('user_id') as count"))->groupBy('months')->pluck('count','months');
        $months = [];
        $posts_count = [];
        foreach($data as $key => $value){
            $months[] = $key;
            $posts_count[] = $value;
        }
        
        return Chartisan::build()
            ->labels(array_values($months))
            ->dataset('Posts',array_values($posts_count));
    }
}

