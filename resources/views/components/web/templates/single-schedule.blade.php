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
      <div class="single-schedule__main__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pulvinar adipiscing mattis tellus sed in sollicitudin cras. Sagittis augue sit dignissim sit ultrices orci lectus. Eleifend netus vitae dignissim hac nibh a. Amet consequat nunc, velit eget dictum consequat ultrices. Nisl nunc id neque non viverra quam sit at porta. Leo massa ac mattis faucibus id purus, diam in. Cursus lorem accumsan elementum tristique sed molestie semper in ipsum.<br><br>ipsum dolor sit amet, consectetur adipiscing elit. Pulvinar adipiscing mattis tellus sed in sollicitudin cras. Sagittis augue sit dignissim sit ultrices orci lectus. Eleifend netus vitae dignissim hac nibh a. Amet consequat nunc, velit eget dictum consequat ultrices. Nisl nunc id neque non viverra quam sit at porta. Leo massa ac mattis faucibus id purus, diam in. Cursus lorem accumsan elementum tristique sed molestie semper in ipsum.</div>
    </div>
  </main>
  <section class="single-schedule__gallery">
    <div class="container single-schedule__gallery__container">
      <h2 class="page-title single-schedule__gallery__title">Galeria</h2>
      <div class="single-schedule__gallery__wrapper">
        @for($i = 0; $i < 8; $i++)
          <div class="single-schedule__gallery__item">
            <img src="https://picsum.photos/1000" alt="{{ $i }}" />
          </div>
        @endfor
      </div>
    </div>
  </section>
</div>
