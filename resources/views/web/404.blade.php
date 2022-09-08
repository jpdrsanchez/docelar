<x-web.templates.base title="Erro 404 - Página não Encontrada" description="Erro 404 página não encontrada">
  <main class="not-found">
    <img src="{{ Vite::asset('resources/images/background/detail-12.svg') }}" alt="" aria-hidden="true" class="not-found__detail-one">
    <img src="{{ Vite::asset('resources/images/background/detail-11.svg') }}" alt="" aria-hidden="true" class="not-found__detail-two">
    <div class="container not-found__container">
      <h1 class="page-title not-found__title">Erro 404</h1>
      <p class="not-found__text">A página solicitada não existe</p>
      <a href="{{ route('web.home') }}" class="not-found__link">Voltar à Home</a>
    </div>
  </main>
</x-web.templates.base>
