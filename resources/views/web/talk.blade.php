<x-web.templates.base title="Palestra">
  <main class="talk-main">
    <div class="container talk-main__container">
      <div class="talk-main__content">
        <a href="{{ route('web.talks') }}" class="talk-main__back">
          <span>
            <ion-icon name="chevron-back-outline"></ion-icon>
          </span>
          Palestras
        </a>
        <h1 class="page-title talk-main__title">{{ $talk->title }}</h1>
        <p class="talk-main__date">{{ $talk->date }}</p>
        <div class="talk-main__text">{!! $talk->introduction !!}</div>
      </div>
      <div class="talk-main__image">
        <img src="{{ asset('storage/'.$talk->media[0]->path) }}" alt="image">
      </div>
    </div>
  </main>
  <section class="talk-section">
    <div class="container talk-section__container">
      <div class="talk-section__text">{!! $talk->description !!}</div>
      <a target="_blank" class="talk-section__link" href="{{ asset('storage/'.$talk->file->path) }}">Baixar Conteúdo</a>
    </div>
  </section>
</x-web.templates.base>
