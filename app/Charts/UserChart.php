<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Post;
use App\User;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {

        $data = Post::select(\DB::raw("COUNT(name) AS count,user_id"))->groupBy('user_id')->pluck('count','user_id');
        $user_id = [];
        $posts_count = [];
        foreach($data as $key => $value){
            $user_id[] = DB::table('users')->where('id', $key)->value('name');
            $posts_count[] = $value;
        }
        
        return Chartisan::build()
            ->labels(array_values($user_id))
            ->dataset('Posts',array_values($posts_count));
    }
}