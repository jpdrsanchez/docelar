<?php

namespace App\Http\Controllers;

use App\Http\Requests\DestroyGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Gallery;
use App\Models\Media;
use Carbon\Carbon;

class GalleryController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $gallery->load(['media', 'gallerieable']);

        return view('control.gallery', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGalleryRequest  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        $name = $request->file('file')->getClientOriginalName();
        $mimeType = $request->file('file')->getClientOriginalExtension();
        $path = $request->file('file')->store('/uploads', ['disk' => 'public']);

        $media = new Media;
        $media->name = $name;
        $media->path = $path;
        $media->type = $mimeType;
        $gallery->media()->save($media, ['type' => 'gallery_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

        return response()->json(['name' => $name], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Http\Requests\DestroyGalleryRequest  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyGalleryRequest $request, Gallery $gallery)
    {
        $gallery->media()->detach($request->image_id);

        return redirect()->route('control.galleries.edit', ['gallery' => $gallery->id])->with('status', 'Imagem excluída com sucesso');
    }
}