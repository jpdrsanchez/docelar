<?php

namespace App\Http\Controllers\Web;

use App\Enums\BannerTypes;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Event;
use App\Models\Project;
use App\Models\Talk;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $banners = Banner::with('media')->get();
        $projects = Project::with('media')->orderBy('date', 'desc')->take(4)->get();
        $talks = Talk::with('media')->orderBy('date', 'desc')->take(5)->get();
        $types = BannerTypes::class;
        return view('web.home', ['banners' => $banners, 'types' => $types, 'projects' => $projects, 'talks' => $talks]);
    }

    public function about()
    {
        return view('web.about');
    }

    public function events()
    {
        $highlight = Event::with('media')->orderBy('date', 'desc')->first();
        $events = Event::with('media')->orderBy('date', 'desc')->skip(1)->take(100)->get();
        return view('web.events', ['events' => $events, 'highlight' => $highlight, 'category' => 'Eventos']);
    }

    public function event(Event $event)
    {
        return view('web.event', ['event', $event]);
    }

    public function projects()
    {
        $highlight = Project::with('media')->orderBy('date', 'desc')->first();
        $projects = Project::with('media')->orderBy('date', 'desc')->skip(1)->take(100)->get();
        return view('web.projects', ['projects' => $projects, 'highlight' => $highlight, 'category' => 'Projetos']);
    }

    public function project(Project $project)
    {
        return view('web.project', ['project', $project]);
    }

    public function talks()
    {
        $highlight = Talk::with('media')->orderBy('date', 'desc')->first();
        $talks = Talk::with('media')->orderBy('date', 'desc')->skip(1)->take(100)->get();
        return view('web.talks', ['talks' => $talks, 'highlight' => $highlight, 'category' => 'Palestras']);
    }

    public function talk(Talk $talk)
    {
        return view('web.talk', ['talk' => $talk]);
    }

    public function donations()
    {
        return view('web.donations');
    }

    public function contact()
    {
        return view('web.contact');
    }
}