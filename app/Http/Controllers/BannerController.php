<?php

namespace App\Http\Controllers;

use App\Enums\BannerTypes;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Models\Banner;
use App\Models\Media;
use Illuminate\Support\Carbon;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('control.banners.index', ['banners' => $banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medias = Media::all();
        $types = BannerTypes::cases();
        return view('control.banners.create', ['types' => $types, 'medias' => $medias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBannerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBannerRequest $request)
    {
        $banner = new Banner;
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->link = $request->link;
        $banner->button_text = $request->button_text;
        $banner->type = $request->type;
        $banner->save();

        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $mimeType = $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->store('/uploads', ['disk' => 'public']);

            $media = new Media;
            $media->name = $name;
            $media->path = $path;
            $media->type = $mimeType;
            $banner->media()->save($media, ['type' => 'banner_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        } else if ($request->has('image_id')) {
            $media = Media::find($request->image_id);
            $banner->media()->attach($media->id, ['type' => 'banner_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        }

        return redirect()->route('control.banners.index')->with('status', 'Banner Criado com Sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        $medias = Media::all();
        $banner->load('media');
        $types = BannerTypes::cases();
        return view('control.banners.edit', ['banner' => $banner, 'types' => $types, 'medias' => $medias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBannerRequest  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $findedBanner = Banner::find($banner->id);
        $findedBanner->title = $request->title;
        $findedBanner->description = $request->description;
        $findedBanner->link = $request->link;
        $findedBanner->button_text = $request->button_text;
        $findedBanner->type = $request->type;
        $findedBanner->save();

        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $mimeType = $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->store('/uploads', ['disk' => 'public']);

            $media = new Media;
            $media->name = $name;
            $media->path = $path;
            $media->type = $mimeType;
            $banner->media()->save($media, ['type' => 'banner_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        } else if ($request->has('image_id')) {
            $media = Media::find($request->image_id);
            if ((int)$request->image_id !== $findedBanner->media[0]->id)
                $banner->media()->sync([$media->id => ['type' => 'banner_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]]);
        }

        return redirect()->route('control.banners.index')->with('status', 'Banner Atualizado com Sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->media()->detach();
        $banner->delete();
        return redirect()->route('control.banners.index')->with('status', 'Banner Deletado com Sucesso');
    }
}