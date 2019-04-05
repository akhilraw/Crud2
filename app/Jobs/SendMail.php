<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Mail;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

     protected $mail_data;
    public function __construct($args = array())
    {
        //
        foreach ($args as $key => $value) {
            $this->$key = $value;
        }

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
       $parseShop = json_decode($this->mail_data, true);
       $content = $parseShop['content'];
       $to = $parseShop['to'];
       $subject = $parseShop['subject'];
       Mail::raw($content['title'] . ' by ' .$content['author'] . ' is available at Our Store, checkout Now', function ($message) use ($to, $subject) {
           $message->to($to);
           $message->subject($subject);
       });
    }
}
