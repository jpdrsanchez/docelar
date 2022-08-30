<header class="header">
  <div class="container header__container">
    <a href="{{ route('web.home') }}" class="header__link">
      <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Doce Lar Logotipo">
      <span class="visually-hidden">Doce Lar da Criança</span>
    </a>
    <nav class="menu">
      <div class="menu__wrapper">
        <ul class="menu__list">
        <li class="menu__item">
          <a href="{{ route('web.home') }}" class="menu__link">Home</a>
        </li>
        <li class="menu__item">
          <a href="{{ route('web.events') }}" class="menu__link">Eventos</a>
        </li>
        <li class="menu__item">
          <a href="{{ route('web.about') }}" class="menu__link">Sobre</a>
        </li>
        <li class="menu__item">
          <a href="{{ route('web.projects') }}" class="menu__link">Projetos</a>
        </li>
        <li class="menu__item">
          <a href="#" class="menu__link">Doações</a>
        </li>
        <li class="menu__item">
          <a href="{{ route('web.talks') }}" class="menu__link">Palestras</a>
        </li>
        <li class="menu__item">
          <a href="#" class="menu__link menu__link--button">Contato</a>
        </li>
      </ul>
      </div>
    </nav>
  </div>
</header>
