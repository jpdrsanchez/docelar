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
          <h1><strong>Palestras</strong></h1>
          <p>Gerencie as palestras cadastradas no site</p>
        </div>
        <a href="{{ route('control.talks.create') }}" class="btn btn-noweb">
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
        @forelse ($talks as $talk)
          <tr>
            <th scope="row">{{ $talk->id }}</th>
            <td>{{ $talk->title }}</td>
            <td>{{ $talk->slug }}</td>
            <td>{{ $talk->date }}</td>
            <td>
              <div class="d-flex align-items-stretch gap-2 justify-content-end">
                <a class="btn btn-noweb" href="{{ route('control.talks.edit', ['talk' => $talk->id]) }}">
                  <ion-icon name="create"></ion-icon>
                  <span class="visually-hidden">Editar</span>
                </a>
                <form action="{{ route('control.talks.destroy', ['talk' => $talk->id]) }}" method="POST">
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
            <h4 class="text-center">Nenhuma Palestra Cadastrada no Site</h4>
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</x-control.templates.base>
