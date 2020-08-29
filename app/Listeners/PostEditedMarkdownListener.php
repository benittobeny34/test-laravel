<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Support\Facades\Mail;

use App\Mail\PostEditedMarkdown;

class PostEditedMarkdownListener
{

    public function handle($event)
    {
        Mail::to($event->post->email)->send(new PostEditedMarkdown($event->post));
    }
}
