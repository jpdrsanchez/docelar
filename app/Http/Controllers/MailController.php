<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSent as ContactSentRequest;
use App\Http\Requests\TalksEmailRequest;
use App\Mail\ContactSent;
use App\Mail\TalkRequestEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact(ContactSentRequest $request)
    {
        Mail::to('contato@docelardacrianca.com.br')->send(new ContactSent($request->name, $request->email, $request->message));

        return redirect()->route('web.sent');
    }

    public function talk(TalksEmailRequest $request)
    {
        Mail::to('contato@docelardacrianca.com.br')->send(new TalkRequestEmail($request->name, $request->email, $request->message, $request->talk_theme));

        return redirect()->route('web.sent');
    }
}