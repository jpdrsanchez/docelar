<x-web.templates.base :title="$eventpage->title_seo" :description="$eventpage->description_seo">
  @if ($highlight)
  @php
    $image = isset($highlight->media[0]) ? asset('storage/'.$highlight->media[0]->path) : false;
  @endphp
  <x-web.templates.schedule :background="$image" :category="$category" :title="$highlight->title" :date="$highlight->date" :description="$highlight->introduction" :link="route('web.event', ['event' => $highlight->slug])" section-title="Próximos Eventos">
    @foreach ($events as $event)
    @php
      $desc = $event->show_date ? $event->date : $event->card_text;
      $eventImage = isset($event->media[0]) ? asset('storage/'.$event->media[0]->path) : false;
    @endphp
    <x-web.components.schedule-card :background="$eventImage" type="md" :title="$event->title" :content="$desc" :link="route('web.event', ['event' => $event->slug])" />
    @endforeach
  </x-web.templates.schedule>
  @endif
</x-web.templates.base>

