<x-control.templates.base title="Bancos">
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
          <h1><strong>Bancos</strong></h1>
          <p>Gerencie os bancos cadastradas no site</p>
        </div>
        <a href="{{ route('control.banks.create') }}" class="btn btn-noweb">
          <ion-icon name="add-circle"></ion-icon>
          Adicionar
        </a>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Código</th>
          <th scope="col">Agência</th>
          <th scope="col">Conta Corrente</th>
          <th scope="col">Títular</th>
          <th scope="col"><span class="d-block text-end">Ações</span></th>
        </tr>
      </thead>
      <tbody>
        @forelse ($banks as $bank)
          <tr>
            <th scope="row">{{ $bank->id }}</th>
            <td>{{ $bank->code }}</td>
            <td>{{ $bank->agency }}</td>
            <td>{{ $bank->account }}</td>
            <td>{{ $bank->name }}</td>
            <td>
              <div class="d-flex align-items-stretch gap-2 justify-content-end">
                <a class="btn btn-noweb" href="{{ route('control.banks.edit', ['bank' => $bank->id]) }}">
                  <ion-icon name="create"></ion-icon>
                  <span class="visually-hidden">Editar</span>
                </a>
                <form action="{{ route('control.banks.destroy', ['bank' => $bank->id]) }}" method="POST">
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
          <td colspan="6">
            <h4 class="text-center">Nenhuma Palestra Cadastrada no Site</h4>
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</x-control.templates.base>
