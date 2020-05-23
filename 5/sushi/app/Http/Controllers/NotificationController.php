<?php

namespace App\Http\Controllers;

use App\Notifications\SampleNotification;
use App\User;

class NotificationController extends Controller
{

    public function view()
    {
        return view('email');
    }

    public function send()
    {
        $user = User::first();

        $user->notify(new SampleNotification());

        return redirect()->back();
    }

}
