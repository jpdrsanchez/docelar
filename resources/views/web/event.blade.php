<x-web.templates.base :title="$event->title_seo" :description="$event->description_seo">
  <x-web.templates.single-schedule previous-title="Evento" :previous-route="route('web.events')" :page-title="$event->title" :page-content="$event->description" :page-photos="$event->gallery->media" />
</x-web.templates.base>
