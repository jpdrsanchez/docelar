<x-web.templates.base title="{{ $talkspage->title_seo }}">
  @if($highlight)
  @php
    $image = isset($highlight->media[0]) ? asset('storage/'.$highlight->media[0]->path) : false;
  @endphp
  <x-web.templates.schedule :background="$image" :category="$category" :title="$highlight->title" :date="$highlight->date" :description="$highlight->introduction" :link="route('web.project', ['project' => $highlight->slug])" section-title="">
    @foreach ($talks as $talk)
    @php
      $image = isset($talk->media[0]) ? asset('storage/'.$talk->media[0]->path) : false;
    @endphp
    <x-web.components.schedule-card :background="$image" type="md" :title="$talk->title" :content="$talk->date" :link="route('web.talk', ['talk' => $talk->slug])" />
    @endforeach
  </x-web.templates.schedule>
  @endif
  <section class="talks-form">
    <div class="container talks-form__container">
      <div class="talks-form__content">
        <x-web.components.contact-form :title="$talkspage->form_title" :action="route('web.sendTalk')" type="talks" />
          <div class="talks-form__image">
            <img src="{{ Vite::asset('resources/images/talks.png') }}" alt="Palestras">
          </div>
      </div>
    </div>
  </section>
</x-web.templates.base>
