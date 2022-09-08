<x-web.templates.base :title="$aboutpage->title_seo" :description="$aboutpage->description_seo">
  <main class="about">
    <img src="{{ Vite::asset('resources/images/background/detail-12.svg') }}" alt="" aria-hidden="true" class="about__detail-one">
    <img src="{{ Vite::asset('resources/images/background/detail-11.svg') }}" alt="" aria-hidden="true" class="about__detail-two">
    <div class="container about__container">
      <h2 class="about__subtitle">{{ $aboutpage->subtitle }}</h2>
      <h1 class="page-title about__title">{{ $aboutpage->title }}</h1>
      <div class="about__text">{!! $aboutpage->content !!}</div>
      <div class="about__photos">
        @if ($aboutpage->image_one)
        <img src="{{ asset('storage/'.$aboutpage->image_one) }}" alt="Image 1" class="about__photos__photo">
        @endif
        @if ($aboutpage->image_two)
        <img src="{{ asset('storage/'.$aboutpage->image_two) }}" alt="Image 2" class="about__photos__photo">
        @endif
      </div>
    </div>
  </main>
</x-web.templates.base>
