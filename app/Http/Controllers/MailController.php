<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use \App\maklonProject;
use App\Mail\ProjectStarted;
use App\User;
use Auth;
class MailController extends Controller
{
    public function notify_email()
    {

        Mail::to(auth::user()->email)->send(new ProjectStarted());
        return redirect()->back()->with('Success', 'Notifikasi berhasil dikirim');

	}

}
