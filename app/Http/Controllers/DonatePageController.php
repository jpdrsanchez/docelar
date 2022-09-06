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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DonatePage  $donatePage
     * @return \Illuminate\Http\Response
     */
    public function destroy(DonatePage $donatePage)
    {
        //
    }
}