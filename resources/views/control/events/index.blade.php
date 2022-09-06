<x-control.templates.base title="Eventos">
  <div class="container">
    @if (session('status'))
      <div class="alert alert-success d-flex align-items-center mb-2 gap-2" role="alert">
        <ion-icon name="checkmark-circle-outline"></ion-icon>
        <div>
          {{ session('status') }}
        </div>
      </div>
    @endif
    <div class="mb-4">
      <div class="d-flex align-items-center justify-content-between">
        <div>
          <h1><strong>Eventos</strong></h1>
          <p>Gerencie os eventos cadastrados no site</p>
        </div>
        <a href="{{ route('control.events.create') }}" class="btn btn-noweb">
          <ion-icon name="add-circle"></ion-icon>
          Adicionar
        </a>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Título</th>
          <th scope="col">Slug</th>
          <th scope="col">Data</th>
          <th scope="col"><span class="d-block text-end">Ações</span></th>
        </tr>
      </thead>
      <tbody>
        @forelse ($events as $event)
          <tr>
            <th scope="row">{{ $event->id }}</th>
            <td>{{ $event->title }}</td>
            <td>{{ $event->slug }}</td>
            <td>{{ $event->date }}</td>
            <td>
              <div class="d-flex align-items-stretch gap-2 justify-content-end">
                <a class="btn btn-noweb" href="{{ route('control.galleries.edit', ['gallery' => $event->gallery->id]) }}">
                  <ion-icon name="images"></ion-icon>
                  <span class="visually-hidden">Galeria</span>
                </a>
                <a class="btn btn-noweb" href="{{ route('control.events.edit', ['event' => $event->id]) }}">
                  <ion-icon name="create"></ion-icon>
                  <span class="visually-hidden">Editar</span>
                </a>
                <form action="{{ route('control.events.destroy', ['event' => $event->id]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">
                    <ion-icon name="trash-bin"></ion-icon>
                    <span class="visually-hidden">Excluir</span>
                  </button>
                </form>
              </div>
            </td>
          </tr>
        @empty
        <tr>
          <td colspan="5">
            <h4 class="text-center">Nenhum Evento Cadastrado no Site</h4>
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</x-control.templates.base>
