<x-web.templates.base title="{{ $donate->title_seo }}">
  <main class="donations-main">
    <div class="container donations-main__container">
      <div class="donations-main__wrapper">
        <h2 class="donations-main__subtitle">{{ $donate->subtitle }}</h2>
        <h1 class="page-title donations-main__title">{{ $donate->title }}</h1>
        <div class="donations-main__text">{!! $donate->content !!}</div>
        <a href="#contribute" class="donations-main__button">Contribuir agora</a>
      </div>
    </div>
    <img src="{{ Vite::asset('resources/images/background/line-1.svg') }}" alt="" aria-hidden="true" class="donations-main__detail">
    <img src="{{ Vite::asset('resources/images/donate/donate-bg.png') }}" alt="" aria-hidden="true" class="donations-main__bg">
  </main>
  <section class="donations-info" id="contribute">
    <div class="container">
      <div class="donations-info__wrapper">
        <h2 class="page-title donations-info__title">{{ $donate->donate_title }}</h2>
        <div class="donations-info__text">{!! $donate->donate_content !!}</div>
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
              @forelse ($banks as $bank)
              <x-web.components.donate-bank :image="asset($bank->media[0]->path)" :agency="$bank->agency" :account="$bank->account" :bank="$bank->code" :name="$bank->name" :document="$bank->document_value" />
              @empty
              <p>Nenhum banco cadastrado</p>
              @endforelse
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
</x-web.templates.base>
