<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Mail\PostEditedMailable;

use Illuminate\Support\Facades\Mail;

class PostEditedMailableListener
{

    public function handle($event)
    {
        Mail::to($event->post->email)->send(new PostEditedMailable($event->post));
    }
}
