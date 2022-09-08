<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMediaRequest;
use App\Http\Requests\UpdateMediaRequest;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::all();

        return view("control.medias.index", ["medias" => $medias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMediaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMediaRequest $request)
    {
        $name = $request->file('file')->getClientOriginalName();
        $mimeType = $request->file('file')->getClientOriginalExtension();
        $path = $request->file('file')->store('/uploads', ['disk' => 'public']);

        $media = new Media;
        $media->name = $name;
        $media->path = $path;
        $media->type = $mimeType;
        $media->save();

        return redirect()->route('control.medias.index')->with('status', 'Arquivo criado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        $mediaRelations = ['banners', 'talks', 'events', 'projects', 'galleries'];
        $media->load($mediaRelations);

        foreach ($mediaRelations as $relation) {
            $media->$relation()->detach();
        }

        Storage::delete($media->path);

        $media->delete();

        return redirect()->route('control.medias.index')->with('status', 'Mídia excluída com sucesso');
    }
}