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
        //
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