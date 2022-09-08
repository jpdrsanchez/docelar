<x-control.templates.base title="Banners">
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
          <h1><strong>Banners</strong></h1>
          <p>Gerencie os banners cadastrados no site</p>
        </div>
        <a href="{{ route('control.banners.create') }}" class="btn btn-noweb">
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
          <th scope="col">Tipo</th>
          <th scope="col">Link</th>
          <th scope="col"><span class="d-block text-end">Ações</span></th>
        </tr>
      </thead>
      <tbody>
        @forelse ($banners as $banner)
          <tr>
            <th scope="row">{{ $banner->id }}</th>
            <td>{{ $banner->title }}</td>
            <td>{{ $banner->type->placeholder() }}</td>
            <td>{{ $banner->link }}</td>
            <td>
              <div class="d-flex align-items-stretch gap-2 justify-content-end">
                <a class="btn btn-noweb" href="{{ route('control.banners.edit', ['banner' => $banner->id]) }}">
                  <ion-icon name="create"></ion-icon>
                  <span class="visually-hidden">Editar</span>
                </a>
                <form action="{{ route('control.banners.destroy', ['banner' => $banner->id]) }}" method="POST">
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
            <h4 class="text-center">Nenhum Banner Cadastrado no Site</h4>
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</x-control.templates.base>
