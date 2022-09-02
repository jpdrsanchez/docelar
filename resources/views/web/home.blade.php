<x-web.templates.base title="Home">
  <x-web.components.home-carousel>
    <x-web.components.home-carousel-item />
    <x-web.components.home-carousel-item />
    <x-web.components.home-carousel-item />
  </x-web.components.home-carousel>
  <section class="homeAbout">
    <img src="{{ Vite::asset('resources/images/home/people-2.png') }}" alt="" aria-hidden="true" class="homeAbout__image">
    <img src="{{ Vite::asset('resources/images/background/line-1.svg') }}" alt="" aria-hidden="true" class="homeAbout__line">
    <div class="container homeAbout__container">
      <div class="homeAbout__wrapper">
        <h2 class="page-title homeAbout__title">Sobre</h2>
        <p class="homeAbout__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo tincidunt massa tortor integer mauris nibh fringilla. Ornare dictumst aliquam purus semper mattis molestie viverra tellus lacinia. Pharetra lectus vestibulum lacus scelerisque duis hendrerit. Risus neque tellus scelerisque faucibus risus et sem libero. Dolor in porttitor nisi a commodo neque, tortor lobortis sit. Mi egestas suspendisse enim eros leo gravida viverra. Nulla aliquam ultricies in amet dui, morbi mi posuere. Quam morbi sit quis enim vestibulum at.<br />At ac iaculis sagittis, adipiscing eget duis egestas pulvinar venenatis. </p>
        <a href="{{ route('web.about') }}" class="homeAbout__link">Saiba mais</a>
      </div>
    </div>
  </section>
  <section class="homeProjects">
    <div class="container homeProjects__container">
      <h2 class="page-title homeProjects__title">Projetos</h2>
      <p class="homeProjects__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo tincidunt massa tortor integer mauris nibh fringilla. Ornare dictumst aliquam purus semper mattis molestie viverra tellus lacinia. Pharetra lectus vestibulum lacus scelerisque duis hendrerit. Risus neque tellus scelerisque.</p>
      <ul class="homeProjects__list">
        <x-web.components.schedule-card background="https://picsum.photos/600" type="lg" title="Evento de Ano Novo" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo tincidunt massa." link="#" />
        <x-web.components.schedule-card background="https://picsum.photos/600" type="lg" title="Evento de Ano Novo" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo tincidunt massa." link="#" />
        <x-web.components.schedule-card background="https://picsum.photos/600" type="lg" title="Evento de Ano Novo" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo tincidunt massa." link="#" />
        <x-web.components.schedule-card background="https://picsum.photos/600" type="lg" title="Evento de Ano Novo" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo tincidunt massa." link="#" />
      </ul>
      <a href="#" class="homeProjects__link">Ver mais projetos</a>
    </div>
    <img src="{{ Vite::asset('resources/images/background/detail-5.svg') }}" alt="" aria-hidden="true" class="homeProjects__image">
    <img src="{{ Vite::asset('resources/images/background/detail-6.svg') }}" alt="" aria-hidden="true" class="homeProjects__image-two">
  </section>
  <section class="homeTalks">
    <div class="container homeTalks__container">
      <div class="homeTalks__content">
        <h2 class="page-title homeTalks__title">Palestras</h2>
        <p class="homeTalks__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo tincidunt massa tortor integer mauris nibh fringilla. Ornare dictumst aliquam<br /><br />purus semper mattis molestie viverra tellus lacinia. Pharetra lectus vestibulum lacus scelerisque duis hendrerit. Risus neque tellus scelerisque. purus semper mattis molestie viverra tellus lacinia. Pharetra lectus vestibulum lacus scelerisque duis hendrerit. Risus neque tellus scelerisque.</p>
        <a href="{{ route('web.talks') }}" class="homeTalks__link">Ver mais palestras</a>
      </div>
    </div>
    <x-web.components.talks-carousel>
      <div class="swiper-slide talks-slide__item">
        <x-web.components.schedule-card background="https://picsum.photos/800" type="sw" title="Palestra Sobre" content="08/08/2022" link="#" />
      </div>
      <div class="swiper-slide talks-slide__item">
        <x-web.components.schedule-card background="https://picsum.photos/800" type="sw" title="Palestra Sobre" content="08/08/2022" link="#" />
      </div>
      <div class="swiper-slide talks-slide__item">
        <x-web.components.schedule-card background="https://picsum.photos/800" type="sw" title="Palestra Sobre" content="08/08/2022" link="#" />
      </div>
      <div class="swiper-slide talks-slide__item">
        <x-web.components.schedule-card background="https://picsum.photos/800" type="sw" title="Palestra Sobre" content="08/08/2022" link="#" />
      </div>
      <div class="swiper-slide talks-slide__item">
        <x-web.components.schedule-card background="https://picsum.photos/800" type="sw" title="Palestra Sobre" content="08/08/2022" link="#" />
      </div>
    </x-web.components.talks-carousel>
  </section>
  <section class="homeDonate">
    <div class="container homeDonate__container">
      <div class="homeDonate__content">
        <h2 class="page-title homeDonate__title">Contribua com as Doações</h2>
        <p class="homeDonate__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo tincidunt massa tortor integer mauris nibh fringilla. Ornare dictumst aliquam purus semper mattis molestie viverra tellus lacinia. Pharetra lectus vestibulum lacus scelerisque duis hendrerit. Risus neque tellus scelerisque faucibus risus et sem libero. Dolor in porttitor nisi a commodo neque, tortor lobortis sit.<br /><br />Risus neque tellus scelerisque faucibus risus et sem libero. Dolor in porttitor nisi a commodo neque, tortor lobortis sit.</p>
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
        <h2 class="page-title homeSchedule__title">Agenda</h2>
        <p class="homeSchedule__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo tincidunt massa tortor.</p>
        <div class="homeSchedule__schedules">
          <div class="homeSchedule__list">
            <h3 class="homeSchedule__list__title">Eventos</h3>
            <ul class="homeSchedule__list__list">
              <li>25/12/2022 - Evento de Natal</li>
              <li>25/12/2022 - Evento de Natal</li>
              <li>25/12/2022 - Evento de Natal</li>
              <li>25/12/2022 - Evento de Natal</li>
              <li>25/12/2022 - Evento de Natal</li>
              <li>25/12/2022 - Evento de Natal</li>
              <li>25/12/2022 - Evento de Natal</li>
              <li>25/12/2022 - Evento de Natal</li>
            </ul>
          </div>
          <div class="homeSchedule__list">
            <h3 class="homeSchedule__list__title">Projetos</h3>
            <ul class="homeSchedule__list__list">
              <li>08/08/2022 - TDAH Infantil</li>
              <li>08/08/2022 - TDAH Infantil</li>
              <li>08/08/2022 - TDAH Infantil</li>
              <li>08/08/2022 - TDAH Infantil</li>
              <li>08/08/2022 - TDAH Infantil</li>
              <li>08/08/2022 - TDAH Infantil</li>
              <li>08/08/2022 - TDAH Infantil</li>
              <li>08/08/2022 - TDAH Infantil</li>
            </ul>
          </div>
          <div class="homeSchedule__list">
            <h3 class="homeSchedule__list__title">Palestras</h3>
            <ul class="homeSchedule__list__list">
              <li>08/08/2022 - TDAH Infantil</li>
              <li>08/08/2022 - TDAH Infantil</li>
              <li>08/08/2022 - TDAH Infantil</li>
              <li>08/08/2022 - TDAH Infantil</li>
              <li>08/08/2022 - TDAH Infantil</li>
              <li>08/08/2022 - TDAH Infantil</li>
              <li>08/08/2022 - TDAH Infantil</li>
              <li>08/08/2022 - TDAH Infantil</li>
            </ul>
          </div>
        </div>
        <h2 class="homeSchedule__subtitle">Horários de Abertura</h2>
        <p class="homeSchedule__open">Segunda a Sexta das 9:00h até 21:00h</p>
        <p class="homeSchedule__open">Sábado e Domingo das 9:00h até 18:00</p>
        <img src="{{ Vite::asset('resources/images/background/detail-8.svg') }}" alt="" aria-hidden="true" class="homeSchedule__detail-one">
        <img src="{{ Vite::asset('resources/images/background/detail-9.svg') }}" alt="" aria-hidden="true" class="homeSchedule__detail-two">
      </div>
    </div>
  </section>
</x-web.templates.base>
