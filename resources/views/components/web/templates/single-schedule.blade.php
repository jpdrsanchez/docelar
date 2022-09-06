<div class="single-schedule">
  <img src="{{ Vite::asset('resources/images/background/detail-12.svg') }}" alt="" aria-hidden="true" class="about__detail-one">
  <img src="{{ Vite::asset('resources/images/background/detail-11.svg') }}" alt="" aria-hidden="true" class="about__detail-two">
  <main class="single-schedule__main">
    <div class="container single-schedule__main__container">
      <div class="single-schedule__main__title">
        <a href="{{ $previousRoute }}" class="single-schedule__main__link">
          <span>
            <ion-icon name="chevron-back-outline"></ion-icon>
          </span>
          {{ $previousTitle }}
        </a>
        <h1 class="page-title">{{ $pageTitle }}</h1>
      </div>
      <div class="single-schedule__main__text">{!! $pageContent !!}</div>
    </div>
  </main>
  @unless (! $pagePhotos)
  <section class="single-schedule__gallery">
    <div class="container single-schedule__gallery__container">
      <h2 class="page-title single-schedule__gallery__title">Galeria</h2>
      <div class="single-schedule__gallery__wrapper">
        @foreach ($pagePhotos as $photo)
        <div class="single-schedule__gallery__item">
          <img src="{{ asset('storage/'.$photo->path) }}" alt="" />
        </div>
        @endforeach
      </div>
    </div>
  </section>
  @endunless
</div>
