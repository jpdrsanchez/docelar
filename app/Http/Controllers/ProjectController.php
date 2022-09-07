<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Gallery;
use App\Models\Media;
use App\Models\Project;
use Carbon\Carbon;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::with('gallery')->get();

        return view('control.projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medias = Media::all();

        return view('control.projects.create', ['medias' => $medias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $validated = $request->validated();
        $project = new Project;
        $project->title_seo = $request->title_seo;
        $project->description_seo = $request->description_seo;
        $project->title = $request->title;
        $project->card_text = $request->card_text;
        $project->show_date = $request->show_date;
        $project->introduction = $request->introduction;
        $project->description = $request->description;
        $project->slug = $validated['slug'];
        $project->date = Carbon::create($request->date)->toDateTimeString();
        $project->save();

        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $mimeType = $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->store('/uploads', ['disk' => 'public']);

            $media = new Media;
            $media->name = $name;
            $media->path = $path;
            $media->type = $mimeType;
            $project->media()->save($media, ['type' => 'project_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        } else if ($request->has('image_id')) {
            $media = Media::find($request->image_id);
            $project->media()->attach($media->id, ['type' => 'project_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        }

        $gallery = new Gallery;
        $gallery->name = 'Galeria de Projetos';

        $project->gallery()->save($gallery);

        return redirect()->route('control.projects.index')->with('status', 'Projeto Criado com Sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $medias = Media::all();
        return view('control.projects.edit', ['project' => $project, 'medias' => $medias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->title_seo = $request->title_seo;
        $project->description_seo = $request->description_seo;
        $project->title = $request->title;
        $project->card_text = $request->card_text;
        $project->show_date = $request->show_date;
        $project->introduction = $request->introduction;
        $project->description = $request->description;
        $project->date = Carbon::create($request->date)->toDateTimeString();
        $project->save();

        if ($request->hasFile('image')) {
            $project->media()->detach();
            $name = $request->file('image')->getClientOriginalName();
            $mimeType = $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->store('/uploads', ['disk' => 'public']);

            $media = new Media;
            $media->name = $name;
            $media->path = $path;
            $media->type = $mimeType;
            $project->media()->save($media, ['type' => 'project_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        } else if ($request->has('image_id')) {
            $media = Media::find($request->image_id);
            if ((int)$request->image_id !== $project->media[0]->id)
                $project->media()->sync([$media->id => ['type' => 'project_image', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]]);
        }

        return redirect()->route('control.projects.index')->with('status', 'Projeto Criado com Sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->media()->detach();
        $project->delete();
        return redirect()->route('control.projects.index')->with('status', 'Projeto Deletado com Sucesso');
    }
}