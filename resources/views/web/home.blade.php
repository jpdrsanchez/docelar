<x-web.templates.base title="{{ $homepage->title_seo }}">
  @if (! $banners->isEmpty())
  <x-web.components.home-carousel>
    @foreach ($banners as $banner)
      <x-web.components.home-carousel-item :title="$banner->title" :text="$banner->description" :button-text="$banner->button_text" :image="$banner->media[0]->path" :link="$banner->link" :type="$types::from($banner->type)" />
    @endforeach
  </x-web.components.home-carousel>
  @endif
  <section class="homeAbout">
    <img src="{{ Vite::asset('resources/images/home/people-2.png') }}" alt="" aria-hidden="true" class="homeAbout__image">
    <img src="{{ Vite::asset('resources/images/background/line-1.svg') }}" alt="" aria-hidden="true" class="homeAbout__line">
    <div class="container homeAbout__container">
      <div class="homeAbout__wrapper">
        <h2 class="page-title homeAbout__title">{{ $homepage->about_title }}</h2>
        <div class="homeAbout__text">{!! $homepage->about_description !!}</div>
        <a href="{{ route('web.about') }}" class="homeAbout__link">Saiba mais</a>
      </div>
    </div>
  </section>
  <section class="homeProjects">
    <div class="container homeProjects__container">
      <h2 class="page-title homeProjects__title">{{ $homepage->projects_title }}</h2>
      <div class="homeProjects__text">{!! $homepage->projects_description !!}</div>
      <ul class="homeProjects__list">
        @foreach ($projects as $project)
          <x-web.components.schedule-card :background="asset('storage/'.$project->media[0]->path)" type="lg" :title="$project->title" :content="$project->introduction" :link="route('web.project', ['project' => $project->slug])" />
        @endforeach
      </ul>
      <a href="{{ route('web.projects') }}" class="homeProjects__link">Ver mais projetos</a>
    </div>
    <img src="{{ Vite::asset('resources/images/background/detail-5.svg') }}" alt="" aria-hidden="true" class="homeProjects__image">
    <img src="{{ Vite::asset('resources/images/background/detail-6.svg') }}" alt="" aria-hidden="true" class="homeProjects__image-two">
  </section>
  <section class="homeTalks">
    <div class="container homeTalks__container">
      <div class="homeTalks__content">
        <h2 class="page-title homeTalks__title">{{ $homepage->talks_title }}</h2>
        <div class="homeTalks__text">{!! $homepage->talks_description !!}</div>
        <a href="{{ route('web.talks') }}" class="homeTalks__link">Ver mais palestras</a>
      </div>
    </div>
    <x-web.components.talks-carousel>
      @foreach ($talks as $talk)
        <div class="swiper-slide talks-slide__item">
          <x-web.components.schedule-card :background="asset('storage/'.$talk->media[0]->path)" type="sw" :title="$talk->title" :content="$talk->date" :link="route('web.talk', ['talk' => $talk->slug])" />
        </div>
      @endforeach
    </x-web.components.talks-carousel>
  </section>
  <section class="homeDonate">
    <div class="container homeDonate__container">
      <div class="homeDonate__content">
        <h2 class="page-title homeDonate__title">{{ $homepage->donate_title }}</h2>
        <div class="homeDonate__text">{!! $homepage->donate_description !!}</div>
        <a href="{{ route('web.donations') }}" class="homeDonate__link">Contribuir</a>
      </div>
    </div>
    <img src="{{ Vite::asset('resources/images/home/people-3.png') }}" alt="" aria-hidden="true" class="homeDonate__image">
    <img src="{{ Vite::asset('resources/images/background/line-1.svg') }}" alt="" aria-hidden="true" class="homeDonate__line">
    <img src="{{ Vite::asset('resources/images/background/detail-7.svg') }}" alt="" aria-hidden="true" class="homeDonate__detail-one">
    <img src="{{ Vite::asset('resources/images/background/circle-2.svg') }}" alt="" aria-hidden="true" class="homeDonate__detail-two">
  </section>
  <section class="homeSchedule">
    <div class="container">
      <div class="homeSchedule__content">
        <h2 class="page-title homeSchedule__title">{{ $homepage->schedule_title }}</h2>
        <div class="homeSchedule__text">{!! $homepage->schedule_text !!}</div>
        <div class="homeSchedule__schedules">
          <div class="homeSchedule__list">
            <h3 class="homeSchedule__list__title">Eventos</h3>
            <ul class="homeSchedule__list__list">
              @forelse ($events as $event)
                <li>{{ $event->date }} - {{ $event->title }}</li>
              @empty
              <li>Nenhum Evento Cadastrado</li>
              @endforelse
            </ul>
          </div>
          <div class="homeSchedule__list">
            <h3 class="homeSchedule__list__title">Projetos</h3>
            <ul class="homeSchedule__list__list">
              @forelse ($projects as $project)
                <li>{{ $project->date }} - {{ $project->title }}</li>
              @empty
              <li>Nenhum Projeto Cadastrado</li>
              @endforelse
            </ul>
          </div>
          <div class="homeSchedule__list">
            <h3 class="homeSchedule__list__title">Palestras</h3>
            <ul class="homeSchedule__list__list">
              @forelse ($talks as $talk)
                <li>{{ $talk->date }} - {{ $talk->title }}</li>
              @empty
              <li>Nenhuma Palestra Cadastrada</li>
              @endforelse
            </ul>
          </div>
        </div>
        <h2 class="homeSchedule__subtitle">Horários de Abertura</h2>
        <div class="homeSchedule__open">{!! $homepage->schedule_weekdays_opening !!}</div>
        <div class="homeSchedule__open">{!! $homepage->schedule_weekeend_opening !!}</div>
        <img src="{{ Vite::asset('resources/images/background/detail-8.svg') }}" alt="" aria-hidden="true" class="homeSchedule__detail-one">
        <img src="{{ Vite::asset('resources/images/background/detail-9.svg') }}" alt="" aria-hidden="true" class="homeSchedule__detail-two">
      </div>
    </div>
  </section>
</x-web.templates.base>
