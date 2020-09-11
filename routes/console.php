<?php
use App\Jobs\sendPostFilesJob;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
 */

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('sendposts', function () {
    $this->info('sending ...');
    $job = (new sendPostFilesJob())->delay(Carbon::now()->addSeconds(10));
    // sendPostFilesJob::dispatch()->delay(now()->addSeconds(10));
    dispatch($job);
    $this->info('successfully sended!!!!!!!!!!!!');
})->describe('sending previous day the posts to corresponding mail');
