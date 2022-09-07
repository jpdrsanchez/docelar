<footer class="footer">
  <div class="container footer__container">
    <div class="footer__content">
      <img src="{{ Vite::asset('resources/images/footer-logo.svg') }}" alt="Doce lar da criança" class="footer__logo">
      <p class="footer__text">{!! $configuration['footer_text'] !!}</p>
    </div>
    <div class="footer__links">
      <h3 class="footer__title">Redes Sociais</h3>
      <nav class="footer__list">
        <a href="{{ $configuration['instagram'] }}" class="footer__list__link">
          <ion-icon name="logo-instagram"></ion-icon>
          <span class="visually-hidden">Instagram</span>
        </a>
        <a href="{{ $configuration['facebook'] }}" class="footer__list__link">
          <ion-icon name="logo-facebook"></ion-icon>
          <span class="visually-hidden">Facebook</span>
        </a>
      </nav>
    </div>
  </div>
  <div class="container footer__copy">
    <p class="footer__copy__text">© Copyright {{ now()->year }} - Doce Lar da Criança - Todos os Direitos Reservados</p>
    <a href="https://www.noweb.io/" class="footer__noweb"><span>Desenvolvido por</span> <span class="visually-hidden">Noweb Publicidade</span> <img src="https://www.noweb.io/shared/favicon.png" width="50" height="20" alt="Noweb Publicidade Logo"></a>
  </div>
</footer>
