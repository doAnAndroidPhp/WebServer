<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Maileble extends Mailable
{
    use Queueable, SerializesModels;

    public $demo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($demo)
    {
        $this->$demo = $demo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('tungliketuyen@gmail.com')
                    ->view('email.demo')
                    ->text('email.demo_plain')
                    ->with([
                            'gia_tri_1' => 1,
                            'gia_tri_2' => 100
                        ]);
    }
}
