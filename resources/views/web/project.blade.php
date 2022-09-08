<x-web.templates.base :title="$project->title_seo" :description="$project->description_seo">
  <x-web.templates.single-schedule previous-title="Evento" :previous-route="route('web.projects')" :page-title="$project->title" :page-content="$project->description" :page-photos="$project->gallery->media" />
</x-web.templates.base>
