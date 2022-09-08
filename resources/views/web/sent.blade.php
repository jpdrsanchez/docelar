<x-web.templates.base title="Solicitação de Contato Enviada" description="Solicitação de Contato Enviada">
  <main class="not-found">
    <img src="{{ Vite::asset('resources/images/background/detail-12.svg') }}" alt="" aria-hidden="true" class="not-found__detail-one">
    <img src="{{ Vite::asset('resources/images/background/detail-11.svg') }}" alt="" aria-hidden="true" class="not-found__detail-two">
    <div class="container not-found__container">
      <h1 class="page-title not-found__title">E-mail enviado com sucesso</h1>
      <a href="{{ route('web.home') }}" class="not-found__link">Voltar à Home</a>
    </div>
  </main>
</x-web.templates.base>
