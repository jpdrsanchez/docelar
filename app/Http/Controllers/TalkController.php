<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTalkRequest;
use App\Http\Requests\UpdateTalkRequest;
use App\Models\Media;
use App\Models\Talk;
use Carbon\Carbon;

class TalkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talks = Talk::all();

        return view('control.talks.index', ['talks' => $talks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medias = Media::all();

        return view('control.talks.create', ['medias' => $medias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTalkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTalkRequest $request)
    {
        $talk = new Talk;

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('/uploads', ['disk' => 'public']);
            $talk->file = $path;
        }

        $validated = $request->validated();
        $talk->title = $request->title;
        $talk->introduction = $request->introduction;
        $talk->description = $request->description;
        $talk->slug = $validated['slug'];
        $talk->date = Carbon::create($request->date)->toDateTimeString();
        $talk->save();

        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $mimeType = $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->store('/uploads', ['disk' => 'public']);

            $media = new Media;
            $media->name = $name;
            $media->path = $path;
            $media->type = $mimeType;
            $talk->media()->save($media, ['type' => 'talk_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        } else if ($request->has('image_id')) {
            $media = Media::find($request->image_id);
            $talk->media()->attach($media->id, ['type' => 'talk_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        }

        return redirect()->route('control.talks.index')->with('status', 'Palestra Criado com Sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function show(Talk $talk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function edit(Talk $talk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTalkRequest  $request
     * @param  \App\Models\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTalkRequest $request, Talk $talk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talk $talk)
    {
        //
    }
}