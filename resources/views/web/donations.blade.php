<x-web.templates.base title="Doações">
  <main class="donations-main">
    <div class="container donations-main__container">
      <div class="donations-main__wrapper">
        <h2 class="donations-main__subtitle">Doações</h2>
        <h1 class="page-title donations-main__title">Faça uma doação para nos ajudar</h1>
        <p class="donations-main__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo tincidunt massa tortor integer mauris nibh fringilla. Ornare dictumst aliquam purus semper mattis molestie viverra tellus lacinia. Pharetra lectus vestibulum lacus scelerisque duis hendrerit. Risus neque tellus scelerisque faucibus risus et sem libero. Dolor in porttitor nisi a commodo neque, tortor lobortis sit.</p>
        <a href="#contribute" class="donations-main__button">Contribuir agora</a>
      </div>
    </div>
    <img src="{{ Vite::asset('resources/images/donate/donate-detail.svg') }}" alt="" aria-hidden="true" class="donations-main__detail">
    <img src="{{ Vite::asset('resources/images/donate/donate-bg.png') }}" alt="" aria-hidden="true" class="donations-main__bg">
  </main>
  <section class="donations-info">
    <div class="container">
      <div class="donations-info__wrapper">
        <h2 class="page-title donations-info__title">Cada centavo conta</h2>
        <p class="donations-info__text"><strong>Atenção:</strong> não vamos até a residencia para retirar a doação. Pedimos que vão ao endereço Rua xxxxx xxxx São Paulo - SP <strong>Qualquer tipo de doação é bem-vinda</strong>, só se atentar a obejetos muito grandes, como por exemplo geladeira, armário, etc.. Aceitamos doações com pix ou conta bancária.</p>
        <ul class="donations-info__methods">
          <li class="donations-info__methods__item donations-info__methods__item--pix">
            <img src="{{ Vite::asset('resources/images/donate/donate-pix.svg') }}" alt="PIX" class="donations-info__methods__item__image">
            <p class="donations-info__methods__item__text">Faça uma doação com pix, aponte a camera do celular para ler o QR Code ao lado</p>
            <img src="{{ Vite::asset('resources/images/donate/donate-qr.png') }}" alt="QR Code" class="donations-info__methods__item__qr">
          </li>
          <li class="donations-info__methods__item donations-info__methods__item--banks">
            <img src="{{ Vite::asset('resources/images/donate/donate-bank.svg') }}" alt="Depoósito Bancário" class="donations-info__methods__item__image donations-info__methods__item__image--banks">
            <p class="donations-info__methods__item__text donations-info__methods__item__text--banks">Faça sua doação com uma Conta Bancária</p>
            <div class="donations-info__methods__item__banks">
              <x-web.components.donate-bank image="" agency="001" account="2442444243-5" bank="0221" name="Leandro" document="37847583758" />
              <x-web.components.donate-bank image="" agency="001" account="2442444243-5" bank="0221" name="Leandro" document="37847583758" />
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
</x-web.templates.base>
