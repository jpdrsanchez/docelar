<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateHomePageRequest;
use App\Models\HomePage;

class HomePageController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function edit(HomePage $homePage)
    {
        $home = HomePage::first();

        return view('control.pages.home', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomePageRequest  $request
     * @param  \App\Models\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomePageRequest $request, HomePage $homePage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePage $homePage)
    {
        //
    }
}