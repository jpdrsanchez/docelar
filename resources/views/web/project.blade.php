<x-web.templates.base :title="$project->title . '| Doce Lar da Criança'">
  <x-web.templates.single-schedule previous-title="Evento" :previous-route="route('web.projects')" :page-title="$project->title" :page-content="$project->description" :page-photos="$project->gallery->medias" />
</x-web.templates.base>
