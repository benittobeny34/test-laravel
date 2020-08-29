<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;


use Illuminate\Support\Facades\Mail;

use App\Mail\PostDeletedMarkdown;

class PostDeletedMarkdownListener
{
   
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to($event->post->email)->send(new PostDeletedMarkdown($event->post));
    }
}
