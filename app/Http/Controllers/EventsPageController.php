<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventsPageRequest;
use App\Http\Requests\UpdateEventsPageRequest;
use App\Models\EventsPage;

class EventsPageController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventsPage  $eventsPage
     * @return \Illuminate\Http\Response
     */
    public function edit(EventsPage $eventsPage)
    {
        $event = EventsPage::first();

        return view('control.pages.events', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventsPageRequest  $request
     * @param  \App\Models\EventsPage  $eventsPage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventsPageRequest $request, EventsPage $eventsPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventsPage  $eventsPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventsPage $eventsPage)
    {
        //
    }
}