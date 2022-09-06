<x-control.templates.base title="Projetos">
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
          <h1><strong>Projetos</strong></h1>
          <p>Gerencie os projetos cadastrados no site</p>
        </div>
        <a href="{{ route('control.projects.create') }}" class="btn btn-noweb">
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
        @forelse ($projects as $project)
          <tr>
            <th scope="row">{{ $project->id }}</th>
            <td>{{ $project->title }}</td>
            <td>{{ $project->slug }}</td>
            <td>{{ $project->date }}</td>
            <td>
              <div class="d-flex align-items-stretch gap-2 justify-content-end">
                <a class="btn btn-noweb" href="{{ route('control.galleries.edit', ['gallery' => $project->gallery->id]) }}">
                  <ion-icon name="images"></ion-icon>
                  <span class="visually-hidden">Galeria</span>
                </a>
                <a class="btn btn-noweb" href="{{ route('control.projects.edit', ['project' => $project->id]) }}">
                  <ion-icon name="create"></ion-icon>
                  <span class="visually-hidden">Editar</span>
                </a>
                <form action="{{ route('control.projects.destroy', ['project' => $project->id]) }}" method="POST">
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
            <h4 class="text-center">Nenhum Projeto Cadastrado no Site</h4>
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</x-control.templates.base>
