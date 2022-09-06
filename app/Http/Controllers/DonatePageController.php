<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDonatePageRequest;
use App\Http\Requests\UpdateDonatePageRequest;
use App\Models\DonatePage;

class DonatePageController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DonatePage  $donatePage
     * @return \Illuminate\Http\Response
     */
    public function edit(DonatePage $donatePage)
    {
        $donate = DonatePage::first();

        return view('control.pages.donate', compact('donate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDonatePageRequest  $request
     * @param  \App\Models\DonatePage  $donatePage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDonatePageRequest $request, DonatePage $donatePage)
    {
        $donate = DonatePage::first();
        $donate->title_seo = $request->title_seo;
        $donate->description_seo = $request->description_seo;
        $donate->title = $request->title;
        $donate->subtitle = $request->subtitle;
        $donate->content = $request->content;
        $donate->donate_title = $request->donate_title;
        $donate->donate_content = $request->donate_content;
        $donate->save();

        return redirect()->route('control.home')->with('status', 'Página atualizada com sucesso');
    }
}