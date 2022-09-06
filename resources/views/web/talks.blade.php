<x-web.templates.base title="{{ $talkspage->title_seo }}">
  @unless (! $highlight)
  <x-web.templates.schedule :background="asset($highlight->media[0]->path)" :category="$category" :title="$highlight->title" :date="$highlight->date" :description="$highlight->introduction" :link="route('web.project', ['project' => $highlight->slug])" section-title="">
    @foreach ($talks as $talk)
    <x-web.components.schedule-card :background="asset($talk->media[0]->path)" type="md" :title="$talk->title" :content="$talk->date" :link="route('web.talk', ['talk' => $talk->slug])" />
    @endforeach
  </x-web.templates.schedule>
  @endunless
  <section class="talks-form">
    <div class="container talks-form__container">
      <div class="talks-form__content">
        <x-web.components.contact-form :title="$talkspage->form_title" type="talks" />
          <div class="talks-form__image">
            <img src="{{ Vite::asset('resources/images/talks.png') }}" alt="Palestras">
          </div>
      </div>
    </div>
  </section>
</x-web.templates.base>
