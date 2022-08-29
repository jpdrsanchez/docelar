<nav class="navbar navbar-expand-lg" style="background: #303a44">
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
        @foreach ($menu() as $item)
          <li @class(['nav-item', 'dropdown' => $item['hasDropdown']])>
            <a
            @class(['nav-link', 'active', 'text-white', 'dropdown-toggle' => $item['hasDropdown']])
            aria-current="page"
            href="{{$item['link']}}"
            @if ($item['hasDropdown'])
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            @endif>
              {{$item['name']}}
            </a>
            @if ($item['hasDropdown'])
            <ul class="dropdown-menu">
                @foreach ($item['dropdownItems'] as $dropdownItem)
                <li><a class="dropdown-item" href="{{$dropdownItem['link']}}">{{$dropdownItem['name']}}</a></li>
                @endforeach
            </ul>
            @endif
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>
