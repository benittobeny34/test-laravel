<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPostFiles extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $excel,$pdf;
    public function __construct($excel,$pdf)
    {
       $this->excel = $excel;
       $this->pdf = $pdf;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Post Files')
            ->view('post.files')
            ->attachData($this->pdf->output(), 'posts.pdf', [
                    'mime' => 'application/pdf',
                ])
            ->attach($this->excel, [
                    'as' => 'posts.xlsx',
                ]);;
        
    }
}

// attach($this->file, 'posts.xlsx', [
//                     'as' => 'posts.xlsx',
//                 ]);