<x-web.templates.base title="{{ $contact->title_seo }}">
  <main class="contact-main">
    <div class="container contact-main__container">
      <div class="contact-main__content">
        <h1 class="page-title contact-main__title">{{ $contact->title }}</h1>
        <div class="contact-main__text">{!! $contact->content !!}</div>
      </div>
    </div>
  </main>
  <section class="contact-section">
    <div class="container">
      <img src="{{ Vite::asset('resources/images/contact/person-1.png') }}" alt="" aria-hidden="true" class="contact-section__image">
      <div class="contact-section__content">
        <div class="contact-section__form">
          <x-web.components.contact-form :action="route('web.send')" :title="$contact->form_title" type="contact" />
        </div>
        <div class="contact-section__column">
          <div class="contact-section__info">
            <ul class="contact-section__contact">
              <li class="contact-section__contact__item">
                <span class="contact-section__contact__item__icon">
                  <img src="{{ Vite::asset('resources/images/contact/location.svg') }}" alt="Endereço">
                </span>
                <div class="contact-section__contact__item__text">
                  <h4>Endereço:</h4>
                  <p>{!! $configuration['address'] !!}</p>
                </div>
              </li>
              <li class="contact-section__contact__item">
                <span class="contact-section__contact__item__icon">
                  <img src="{{ Vite::asset('resources/images/contact/phone.svg') }}" alt="Telefone">
                </span>
                <div class="contact-section__contact__item__text">
                  <h4>Telefone:</h4>
                  <p>{{ $configuration['phone'] }}</p>
                </div>
              </li>
              <li class="contact-section__contact__item">
                <span class="contact-section__contact__item__icon">
                  <img src="{{ Vite::asset('resources/images/contact/mail.svg') }}" alt="E-mail">
                </span>
                <div class="contact-section__contact__item__text">
                  <h4>E-mail:</h4>
                  <p>{{ $configuration['email'] }}</p>
                </div>
              </li>
            </ul>
            <div class="contact-section__map">
              {!! $configuration['maps'] !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-web.templates.base>
