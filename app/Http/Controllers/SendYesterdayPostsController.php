<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Mail;
use PDF;
use App\Exports\PostsExport;
use App\Post;
class SendYesterdayPostsController extends Controller
{

    public static function sendFiles()
    {

        $posts = Post::orderBy('created_at')->take(5)->get();
        $pdf = PDF::loadView('post.export_pdf',compact('posts'));
        $excel =  Excel::download(new PostsExport,'posts.xlsx');
        Mail::to('benittobeny34@gmail.com')->send(new \App\Mail\SendPostFiles($excel->getFile(),$pdf));
        
    }
}
