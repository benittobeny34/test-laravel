<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Post;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class YearWiseChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {

        $data =  Post::select(DB::raw("DATE_FORMAT(created_at,'%Y') as year,count('user_id') as count"))->groupBy('year')->pluck('count','year');  
        $years = [];
        $posts_count = [];

        foreach($data as $key => $value){
            $years[] = $key;
            $posts_count[] = $value;
        }
        
        return Chartisan::build()
            ->labels(array_values($years))
            ->dataset('Posts',array_values($posts_count));
    }

}