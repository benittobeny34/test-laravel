<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomClasses\UserData;
use App\CustomClasses\UserMarks;
use DB;

class ProfileController extends Controller
{
 	   public function store(Request $request)
 	   {
        $UserData = new UserData();
        $UserMarks = new UserMarks();
        $TenthPer = $UserMarks->GetTenthPer();
        $TwelfthPer =$UserMarks->GetTwelfthPer();
        $usage = $UserData->SocialUsage();

        DB::table('user_details')->insert([
         	'name'=>$UserData->name,
         	'email'=>$UserData->email,
         	'age'=>$UserData->age,
         	'gender'=>$UserData->gender
          ]);
          $data=array('name'=>$UserData->name,
                'email'=>$UserData->email,
                'age'=>$UserData->age,
                'gender'=>$UserData->gender,
                'degree'=>array(json_encode($UserData->degree)),
                'sport' => $UserData->sport,
                'fshow' => $UserData->show,
                'tenth_per' => $TenthPer,
                'twelfth_per' => $TwelfthPer,
                'susage' => array(json_encode($UserData->social)),
                'image' => $UserData->profile,
                'usage' =>$usage
            );

        return view('profile_detail',['data'=>$data]);

 	   }
}
