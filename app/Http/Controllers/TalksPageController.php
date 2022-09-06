<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTalksPageRequest;
use App\Http\Requests\UpdateTalksPageRequest;
use App\Models\TalksPage;

class TalksPageController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TalksPage  $talksPage
     * @return \Illuminate\Http\Response
     */
    public function edit(TalksPage $talksPage)
    {
        $talks = TalksPage::first();

        return view('control.pages.talks', compact('talks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTalksPageRequest  $request
     * @param  \App\Models\TalksPage  $talksPage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTalksPageRequest $request, TalksPage $talksPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TalksPage  $talksPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(TalksPage $talksPage)
    {
        //
    }
}