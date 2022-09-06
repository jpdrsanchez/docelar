<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use App\Models\ContactPage;
use App\Models\DonatePage;
use App\Models\EventsPage;
use App\Models\HomePage;
use App\Models\ProjectsPage;
use App\Models\TalksPage;
use Illuminate\Http\Request;

class ControlController extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $home = HomePage::first();
        $about = AboutPage::first();
        $donate = DonatePage::first();
        $contact = ContactPage::first();
        $events = EventsPage::first();
        $talks = TalksPage::first();
        $projects = ProjectsPage::first();

        return view('control.home', compact('home', 'about', 'donate', 'contact', 'events', 'talks', 'projects'));
    }
}