<?php

namespace App\Jobs;

use App\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Maatwebsite\Excel\Facades\Excel;
use Mail;
use PDF;
use App\Exports\PostsExport;

class sendPostFilesJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $posts = Post::orderBy('created_at')->take(5)->get();
        $pdf = PDF::loadView('post.export_pdf',compact('posts'));
        $excel =  Excel::download(new PostsExport,'posts.xlsx');
        Mail::to('benittobeny34@gmail.com')->send(new \App\Mail\SendPostFiles($excel->getFile(),$pdf));
    }
}
