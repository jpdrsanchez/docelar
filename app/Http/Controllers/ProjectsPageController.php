<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectsPageRequest;
use App\Http\Requests\UpdateProjectsPageRequest;
use App\Models\ProjectsPage;

class ProjectsPageController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectsPage  $projectsPage
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectsPage $projectsPage)
    {
        $project = ProjectsPage::first();

        return view('control.pages.projects', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectsPageRequest  $request
     * @param  \App\Models\ProjectsPage  $projectsPage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectsPageRequest $request, ProjectsPage $projectsPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectsPage  $projectsPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectsPage $projectsPage)
    {
        //
    }
}