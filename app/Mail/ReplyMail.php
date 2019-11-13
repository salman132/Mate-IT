<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReplyMail extends Mailable
{
    use Queueable, SerializesModels;
    public $email,$subject,$text,$file;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$subject,$text, $file=null)
    {
        $this->email = $email;
        $this->subject = $subject;
        $this->text = $text;
        $this->file = $file;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $msg = $this->from($this->email)
            ->subject($this->subject)
            ->markdown('admin.contact.reply')->with('text', $this->text);
        if ($this->file !=NULL){
            foreach ($this->file as $f) {
                if (file_exists($f)) {
                    $msg->attach($f);

                } else {
                    return $msg;
                }
            }

        }


        return $msg;
    }


}
