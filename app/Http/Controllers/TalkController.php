<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTalkRequest;
use App\Http\Requests\UpdateTalkRequest;
use App\Models\Media;
use App\Models\Talk;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

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
        $talk->title_seo = $request->title_seo;
        $talk->description_seo = $request->description_seo;
        $talk->title = $request->title;
        $talk->card_text = $request->card_text;
        $talk->show_date = $request->show_date;
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function edit(Talk $talk)
    {
        $medias = Media::all();
        return view('control.talks.edit', ['talk' => $talk, 'medias' => $medias]);
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
        if ($request->hasFile('file')) {
            if ($talk->file) Storage::delete($talk->file);
            $path = $request->file('file')->store('/uploads', ['disk' => 'public']);
            $talk->file = $path;
        }

        $talk->title_seo = $request->title_seo;
        $talk->description_seo = $request->description_seo;
        $talk->title = $request->title;
        $talk->card_text = $request->card_text;
        $talk->show_date = $request->show_date;
        $talk->introduction = $request->introduction;
        $talk->description = $request->description;
        $talk->date = Carbon::create($request->date)->toDateTimeString();
        $talk->save();

        if ($request->hasFile('image')) {
            $talk->media()->detach();
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
            if ((int)$request->image_id !== $talk->media[0]->id)
                $talk->media()->sync([$media->id => ['type' => 'talk_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]]);
        }

        return redirect()->route('control.talks.index')->with('status', 'Palestra Criado com Sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talk $talk)
    {
        $talk->media()->detach();
        $talk->delete();
        return redirect()->route('control.talks.index')->with('status', 'Palestra Deletada com Sucesso');
    }
}