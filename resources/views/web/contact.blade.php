<x-web.templates.base title="Contato">
  <main class="contact-main">
    <div class="container contact-main__container">
      <div class="contact-main__content">
        <h1 class="page-title contact-main__title">Contato</h1>
        <p class="contact-main__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo tincidunt massa tortor integer mauris nibh fringilla. Ornare dictumst aliquam. massa tortor integer mauris nibh fringilla. Ornare dictumst aliquam.</p>
      </div>
    </div>
  </main>
  <section class="contact-section">
    <div class="container">
      <div class="contact-section__content">
        <div class="contact-section__form">
          <x-web.components.contact-form title="Fale Conosco" type="contact" />
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
                  <p>Rua xxxxxxx xxxxxx, xxx São Paulo - SP</p>
                </div>
              </li>
              <li class="contact-section__contact__item">
                <span class="contact-section__contact__item__icon">
                  <img src="{{ Vite::asset('resources/images/contact/phone.svg') }}" alt="Telefone">
                </span>
                <div class="contact-section__contact__item__text">
                  <h4>Telefone:</h4>
                  <p>(11) 90000-0000</p>
                </div>
              </li>
              <li class="contact-section__contact__item">
                <span class="contact-section__contact__item__icon">
                  <img src="{{ Vite::asset('resources/images/contact/mail.svg') }}" alt="E-mail">
                </span>
                <div class="contact-section__contact__item__text">
                  <h4>E-mail:</h4>
                  <p>contato@docelar.com.br</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-web.templates.base>
