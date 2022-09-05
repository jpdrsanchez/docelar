<?php

namespace App\Http\Controllers\Web;

use App\Enums\BannerTypes;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $banners = Banner::with('media')->get();
        $types = BannerTypes::class;
        return view('web.home', ['banners' => $banners, 'types' => $types]);
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