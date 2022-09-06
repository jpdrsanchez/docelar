<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutPageRequest;
use App\Http\Requests\UpdateAboutPageRequest;
use App\Models\AboutPage;

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
        //
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