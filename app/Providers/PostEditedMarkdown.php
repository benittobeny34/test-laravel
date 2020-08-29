<?php

namespace App\Providers;

use App\Providers\PostEdited;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PostEditedMarkdown
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PostEdited  $event
     * @return void
     */
    public function handle(PostEdited $event)
    {
        //
    }
}
