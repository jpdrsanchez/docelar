<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutPageRequest;
use App\Http\Requests\UpdateAboutPageRequest;
use App\Models\AboutPage;
use Illuminate\Support\Facades\Storage;

class AboutPageController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutPage  $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutPage $aboutPage)
    {
        $about = AboutPage::first();
        return view('control.pages.about', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAboutPageRequest  $request
     * @param  \App\Models\AboutPage  $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAboutPageRequest $request, AboutPage $aboutPage)
    {
        $about = AboutPage::first();

        if ($request->hasFile('image_one')) {
            if ($about->img_one) Storage::delete($about->img_one);
            $path = $request->file('image_one')->store('/uploads', ['disk' => 'public']);

            $about->image_one = $path;
        }

        if ($request->hasFile('image_two')) {
            if ($about->image_two) Storage::delete($about->image_two);
            $path = $request->file('image_two')->store('/uploads', ['disk' => 'public']);

            $about->image_two = $path;
        }

        $about->title_seo = $request->title_seo;
        $about->description_seo = $request->description_seo;
        $about->title = $request->title;
        $about->subtitle = $request->subtitle;
        $about->content = $request->content;
        $about->save();

        return redirect()->route('control.home')->with('status', 'Página atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutPage  $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutPage $aboutPage)
    {
        //
    }
}