<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMarkdownEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(User $user)
    {
      $this->user = $user;
    }

    public function build()
    {
        return $this->markdown('emails.test_markdown')
            ->to($this->user->email);
    }

}
