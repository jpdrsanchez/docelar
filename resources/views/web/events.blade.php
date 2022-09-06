<x-web.templates.base title="Eventos">
  <x-web.templates.schedule :background="asset('storage/'.$highlight->media[0]->path)" :category="$category" :title="$highlight->title" :date="$highlight->date" :description="$highlight->introduction" :link="route('web.event', ['event' => $highlight->slug])" section-title="Próximos Eventos">
    @foreach ($events as $event)
    <x-web.components.schedule-card :background="asset('storage/'.$event->media[0]->path)" type="md" :title="$event->title" :content="$event->date" :link="route('web.event', ['event' => $event->slug])" />
    @endforeach
  </x-web.templates.schedule>
</x-web.templates.base>

