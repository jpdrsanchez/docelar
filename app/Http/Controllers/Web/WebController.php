<?php

namespace App\Http\Controllers\Web;

use App\Enums\BannerTypes;
use App\Http\Controllers\Controller;
use App\Models\AboutPage;
use App\Models\Bank;
use App\Models\Banner;
use App\Models\ContactPage;
use App\Models\DonatePage;
use App\Models\Event;
use App\Models\EventsPage;
use App\Models\HomePage;
use App\Models\Project;
use App\Models\ProjectsPage;
use App\Models\Talk;
use App\Models\TalksPage;

class WebController extends Controller
{
    public function home()
    {
        $homepage = HomePage::first();
        $banners = Banner::with('media')->get();
        $projects = Project::with('media')->orderBy('date', 'desc')->take(8)->get();
        $talks = Talk::with('media')->orderBy('date', 'desc')->take(8)->get();
        $events = Event::with('media')->orderBy('date', 'desc')->take(8)->get();
        $types = BannerTypes::class;

        return view('web.home', compact('homepage', 'banners', 'projects', 'talks', 'events', 'types'));
    }

    public function about()
    {
        $aboutpage = AboutPage::first();

        return view('web.about', compact('aboutpage'));
    }

    public function events()
    {
        $eventpage = EventsPage::first();
        $highlight = Event::with('media')->orderBy('date', 'desc')->first();
        $events = Event::with('media')->orderBy('date', 'desc')->skip(1)->take(100)->get();
        return view('web.events', ['eventpage' => $eventpage, 'events' => $events, 'highlight' => $highlight, 'category' => 'Eventos']);
    }

    public function event(Event $event)
    {
        return view('web.event', ['event', $event]);
    }

    public function projects()
    {
        $projectpage = ProjectsPage::first();
        $highlight = Project::with('media')->orderBy('date', 'desc')->first();
        $projects = Project::with('media')->orderBy('date', 'desc')->skip(1)->take(100)->get();
        return view('web.projects', ['projectpage' => $projectpage, 'projects' => $projects, 'highlight' => $highlight, 'category' => 'Projetos']);
    }

    public function project(Project $project)
    {
        return view('web.project', ['project', $project]);
    }

    public function talks()
    {
        $talkspage = TalksPage::first();
        $highlight = Talk::with('media')->orderBy('date', 'desc')->first();
        $talks = Talk::with('media')->orderBy('date', 'desc')->skip(1)->take(100)->get();
        return view('web.talks', ['talkspage' => $talkspage, 'talks' => $talks, 'highlight' => $highlight, 'category' => 'Palestras']);
    }

    public function talk(Talk $talk)
    {
        return view('web.talk', ['talk' => $talk]);
    }

    public function donations()
    {
        $donate = DonatePage::first();
        $banks = Bank::with('media')->get();
        return view('web.donations', compact('donate', 'banks'));
    }

    public function contact()
    {
        $contact = ContactPage::first();
        return view('web.contact', compact('contact'));
    }
}