<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use  App\Events\PostCreatedEvent;
use  App\Events\PostEditedEvent;
use  App\Events\PostDeletedEvent;
use App\Listeners\PostCreatedMailableListener;
use App\Listeners\PostCreatedMarkdownListener;
use App\Listeners\PostEditedMailableListener;
use App\Listeners\PostEditedMarkdownListener;
use App\Listeners\PostDeletedMailableListener;
use App\Listeners\PostDeletedMarkdownListener;
 


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        PostCreatedEvent::class => [
            PostCreatedMailableListener::class,
            PostCreatedMarkdownListener::class,
        ],
        PostEditedEvent::class => [
            PostEditedMailableListener::class,
            PostEditedMarkdownListener::class,
        ],
        PostDeletedEvent::class => [
            PostDeletedMailableListener::class,
            PostDeletedMarkdownListener::class,
            
            
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
