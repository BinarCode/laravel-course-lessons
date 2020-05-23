<?php

namespace App\Http\Controllers;

use App\Mail\FirstEmail;
use App\Mail\FirstMarkdown;
use App\Mail\TestMarkdownEmail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function view()
    {
        return view('email');
    }

    public function send()
    {

        $users = User::all();

        $users->each(function (User $user) {
            Mail::later(
                10,
                new TestMarkdownEmail($user)
            );
        });


//        Mail::send(new FirstEmail(request('email')));


//        Mail::raw('Hey! It is the first email here :)', function (Message $mailable) {
//            $mailable->to(request('email'))
//                ->from('sample@school.com')
//                ->subject('Email subject');
//        });

        return redirect()->back();
    }

}
