<section class="home-carousel">
  <div class="container">
    <img src="{{ Vite::asset('resources/images/background/circle-1.svg') }}" alt="" aria-hidden="true" class="home-carousel__detail">
    <div class="swiper swiper-home">
      <div class="swiper-wrapper">
        {{ $slot }}
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
