<div class="schedule-template">
  <main class="schedule-template__main" style="background: linear-gradient(90deg, rgba(0, 0, 0, 0.7) 5.99%, rgba(0, 0, 0, 0) 56.61%), linear-gradient(0deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url({{ $background }}); background-size: cover;">
    <div class="container schedule-template__container">
      <div class="schedule-template__wrapper">
        <h2 class="schedule-template__category">{{ $category }}</h2>
        <h1 class="page-title schedule-template__title">{{ $title }}</h1>
        <p class="schedule-template__date">Acontecerá dia {{ $date }}</p>
        <p class="schedule-template__text">{{ $description }}</p>
        <a class="schedule-template__link" href="{{ $link }}">Saiba mais</a>
      </div>
    </div>
  </main>
  <section class="schedule-template__section">
    <div class="container">
      @unless (empty($sectionTitle))
        <h2 class="page-title schedule-template__section__title">{{ $sectionTitle }}</h2>
      @endunless
      <ul class="schedule-template__list">{{ $slot }}</ul>
    </div>
  </section>
</div>
