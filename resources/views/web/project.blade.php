<x-web.templates.base title="{{ $project->title }}">
  <x-web.templates.single-schedule previous-title="Evento" :previous-route="route('web.projects')" :page-title="$project->title" :page-content="$project->description" :page-photos="$project->media" />
</x-web.templates.base>
