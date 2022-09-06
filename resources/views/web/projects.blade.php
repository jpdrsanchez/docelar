<x-web.templates.base title="Projetos">
  <x-web.templates.schedule :background="asset($highlight->media[0]->path)" :category="$category" :title="$highlight->title" :date="$highlight->date" :description="$highlight->introduction" :link="route('web.project', ['project' => $highlight->slug])" section-title="">
    @foreach ($projects as $project)
    <x-web.components.schedule-card :background="asset($project->media[0]->path)" type="md" :title="$project->title" :content="$project->date" :link="route('web.project', ['project' => $project->slug])" />
    @endforeach
  </x-web.templates.schedule>
</x-web.templates.base>
