<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\mail\ContactMessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMessageController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();

        $mail = new ContactMessageMail($data);
        Mail::to(env('MAIL_FROM_ADDRESS'))->send($mail);

        return response('mail sent', 204);
    }
}
