<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('web.home');
    }

    public function about()
    {
        return view('web.about');
    }

    public function events()
    {
        return view('web.events');
    }

    public function projects()
    {
        return view('web.projects');
    }

    public function talks()
    {
        return view('web.talks');
    }

    public function donations()
    {
        return view('web.donations');
    }

    public function event()
    {
        return view('web.event');
    }

    public function talk()
    {
        return view('web.talk');
    }

    public function contact()
    {
        return view('web.contact');
    }
}