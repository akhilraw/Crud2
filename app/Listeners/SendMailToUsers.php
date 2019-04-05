<?php

namespace App\Listeners;

use App\Events\BookPublished;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use App\Jobs\SendMail;

class SendMailToUsers
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
     * @param  BookPublished  $event
     * @return void
     */
    public function handle(BookPublished $event)
    {
        //
        $title =  $event->title;
        $author = $event->author;
        $user =  $event->user;
        $content = [];
        $content['author'] = $author;
        $content['title'] = $title;

        try {

            $mailData = ['content'=>$content,'subject'=>'New Book Arrived','to'=>$user];
            $data     = ['mail_data'=>json_encode($mailData)];
            SendMail::dispatch($data)->onQueue('high');
        }
        catch (\Exception $e)
        {
            Log::alert($e->getMessage().$e->getFile().$e->getLine());
        }

    }



}
