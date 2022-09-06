<x-control.templates.base title="Home">
  <div class="container">
    @if (session('status'))
      <div class="alert alert-success d-flex align-items-center mb-2 gap-2" role="alert">
        <ion-icon name="checkmark-circle-outline"></ion-icon>
        <div>
          {{ session('status') }}
        </div>
      </div>
    @endif
    <h1>Configurações gerais do site</h1>
    <p>Atualizar configurações gerais do site</p>
    <hr>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Página</th>
          <th scope="col">Título</th>
          <th scope="col">Link</th>
          <th scope="col"><span class="d-block text-end">Ações</span></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Home</td>
          <td>{{ $home->title_seo }}</td>
          <td><a href="{{ route('web.home') }}">/</a></td>
          <td>
            <div class="d-flex align-items-stretch gap-2 justify-content-end">
              <a class="btn btn-noweb" href="{{ route('control.homepage.edit', ['homepage' => 1]) }}">
                <ion-icon name="create"></ion-icon>
                <span class="visually-hidden">Editar</span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Sobre</td>
          <td>{{ $about->title_seo }}</td>
          <td><a href="{{ route('web.about') }}">/sobre</a></td>
          <td>
            <div class="d-flex align-items-stretch gap-2 justify-content-end">
              <a class="btn btn-noweb" href="{{ route('control.aboutpage.edit', ['aboutpage' => 1]) }}">
                <ion-icon name="create"></ion-icon>
                <span class="visually-hidden">Editar</span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Doações</td>
          <td>{{ $donate->title_seo }}</td>
          <td><a href="{{ route('web.donations') }}">/doacoes</a></td>
          <td>
            <div class="d-flex align-items-stretch gap-2 justify-content-end">
              <a class="btn btn-noweb" href="{{ route('control.donatepage.edit', ['donatepage' => 1]) }}">
                <ion-icon name="create"></ion-icon>
                <span class="visually-hidden">Editar</span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Eventos</td>
          <td>{{ $events->title_seo }}</td>
          <td><a href="{{ route('web.events') }}">/eventos</a></td>
          <td>
            <div class="d-flex align-items-stretch gap-2 justify-content-end">
              <a class="btn btn-noweb" href="{{ route('control.eventspage.edit', ['eventspage' => 1]) }}">
                <ion-icon name="create"></ion-icon>
                <span class="visually-hidden">Editar</span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Palestras</td>
          <td>{{ $talks->title_seo }}</td>
          <td><a href="{{ route('web.events') }}">/palestras</a></td>
          <td>
            <div class="d-flex align-items-stretch gap-2 justify-content-end">
              <a class="btn btn-noweb" href="{{ route('control.talkspage.edit', ['talkspage' => 1]) }}">
                <ion-icon name="create"></ion-icon>
                <span class="visually-hidden">Editar</span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Projetos</td>
          <td>{{ $projects->title_seo }}</td>
          <td><a href="{{ route('web.events') }}">/projetos</a></td>
          <td>
            <div class="d-flex align-items-stretch gap-2 justify-content-end">
              <a class="btn btn-noweb" href="{{ route('control.projectspage.edit', ['projectspage' => 1]) }}">
                <ion-icon name="create"></ion-icon>
                <span class="visually-hidden">Editar</span>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Contato</td>
          <td>{{ $contact->title_seo }}</td>
          <td><a href="{{ route('web.events') }}">/contato</a></td>
          <td>
            <div class="d-flex align-items-stretch gap-2 justify-content-end">
              <a class="btn btn-noweb" href="{{ route('control.contactpage.edit', ['contactpage' => 1]) }}">
                <ion-icon name="create"></ion-icon>
                <span class="visually-hidden">Editar</span>
              </a>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</x-control.templates.base>
