<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
class Test extends Mailable
{
    use Queueable, SerializesModels;
    public $mailer; 
    /**
     * Create a new message instance.
     *
     * @return void
     */ 
    public function __construct(Request $mailer)
    {
        $this->mailer = $mailer;  
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.test');
    }
}
