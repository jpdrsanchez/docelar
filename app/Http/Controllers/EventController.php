<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Media;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::with('gallery')->get();

        return view('control.events.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medias = Media::all();

        return view('control.events.create', ['medias' => $medias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {
        $validated = $request->validated();
        $event = new Event;
        $event->title_seo = $request->title_seo;
        $event->description_seo = $request->description_seo;
        $event->title = $request->title;
        $event->card_text = $request->card_text;
        $event->show_date = $request->show_date;
        $event->introduction = $request->introduction;
        $event->description = $request->description;
        $event->slug = $validated['slug'];
        $event->date = Carbon::create($request->date)->toDateTimeString();
        $event->save();

        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $mimeType = $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->store('/uploads', ['disk' => 'public']);

            $media = new Media;
            $media->name = $name;
            $media->path = $path;
            $media->type = $mimeType;
            $event->media()->save($media, ['type' => 'event_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        } else if ($request->has('image_id')) {
            $media = Media::find($request->image_id);
            $event->media()->attach($media->id, ['type' => 'event_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        }

        $gallery = new Gallery;
        $gallery->name = 'Galeria de Eventos';

        $event->gallery()->save($gallery);

        return redirect()->route('control.events.index')->with('status', 'Evento Criado com Sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $medias = Media::all();
        return view('control.events.edit', ['event' => $event, 'medias' => $medias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $event->title_seo = $request->title_seo;
        $event->description_seo = $request->description_seo;
        $event->title = $request->title;
        $event->card_text = $request->card_text;
        $event->show_date = $request->show_date;
        $event->introduction = $request->introduction;
        $event->description = $request->description;
        $event->date = Carbon::create($request->date)->toDateTimeString();
        $event->save();

        if ($request->hasFile('image')) {
            $event->media()->detach();
            $name = $request->file('image')->getClientOriginalName();
            $mimeType = $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->store('/uploads', ['disk' => 'public']);

            $media = new Media;
            $media->name = $name;
            $media->path = $path;
            $media->type = $mimeType;
            $event->media()->save($media, ['type' => 'event_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        } else if ($request->has('image_id')) {
            $media = Media::find($request->image_id);
            if ((int)$request->image_id !== $event->media[0]->id)
                $event->media()->sync([$media->id => ['type' => 'event_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]]);
        }

        return redirect()->route('control.events.index')->with('status', 'Evento Criado com Sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->media()->detach();
        $event->delete();
        return redirect()->route('control.events.index')->with('status', 'Evento Deletado com Sucesso');
    }
}