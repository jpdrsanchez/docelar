<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactPageRequest;
use App\Http\Requests\UpdateContactPageRequest;
use App\Models\ContactPage;

class ContactPageController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactPage $contactPage)
    {
        $contact = ContactPage::first();

        return view('control.pages.contact', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactPageRequest  $request
     * @param  \App\Models\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactPageRequest $request, ContactPage $contactPage)
    {
        $contact = ContactPage::first();
        $contact->title_seo = $request->title_seo;
        $contact->description_seo = $request->description_seo;
        $contact->title = $request->title;
        $contact->content = $request->content;
        $contact->form_title = $request->form_title;
        $contact->save();

        return redirect()->route('control.home')->with('status', 'Página atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactPage $contactPage)
    {
        //
    }
}