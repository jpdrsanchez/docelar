<nav class="navbar navbar-expand-lg noweb-navbar mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="//www.nowcloud.com.br/tools/framework/v5/images/logo-dashboard.png" alt="Logotipo Noweb Publicidade" height="30">
      <span class="visually-hidden">Noweb Publicidade</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        @foreach ($menu as $item)
          <x-control.components.nav-item :item="$item->getValues()" />
        @endforeach
        <li class="nav-item">
          <form action="{{ route('logout') }}" method="POST" >
            @csrf
            <button type="submit" class="nav-link text-white btn-link">Sair</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>
