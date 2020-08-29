<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Support\Facades\Mail;

use App\Mail\PostCreatedMarkdown;

class PostCreatedMarkdownListener
{

    public function handle($event)
    {
      Mail::to($event->post->email)->send(new PostCreatedMarkdown($event->post));  
    }
}
