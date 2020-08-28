<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Auth;

use App\Mail\PostMail;

use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(6);
        $latestFive = Post::latest(5);

        return view('welcome',compact('posts','latestFive'));

    }


    public function myDemoMail(){
                $myEmail = 'brendonbeni42@gmail.com';

   

        $details = [

            'title' => 'Post Created',

            'url' => 'https://www.itsolutionstuff.com'

        ];

  

        Mail::to($myEmail)->send(new PostMail($details));

   

        dd("Mail Send Successfully");
        
    }


   


}
