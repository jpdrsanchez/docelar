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
        $talk = TalksPage::first();
        $talk->title_seo = $request->title_seo;
        $talk->description_seo = $request->description_seo;
        $talk->form_title = $request->form_title;
        $talk->save();

        return redirect()->route('control.home')->with('status', 'Página atualizada com sucesso');
    }
}