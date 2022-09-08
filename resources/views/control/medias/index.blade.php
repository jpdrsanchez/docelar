<x-control.templates.base title="Mídias">
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
          <h1><strong>Mídias</strong></h1>
          <p>Gerencie as mídias cadastradas no site</p>
        </div>
        <a data-bs-toggle="collapse" href="#upload_media" role="button" aria-expanded="false" aria-controls="upload_media" class="btn btn-noweb">
          <ion-icon name="add-circle"></ion-icon>
          Upload
        </a>
      </div>
      <div class="mb-4"></div>
      <div class="collapse @error("file") show @enderror" id="upload_media">
        <div class="card card-body">
          <form method="POST" action="{{ route('control.medias.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="p-3 d-flex align-items-end justify-content-between gap-3">
              <div class="flex-fill">
                <label for="file" class="form-label">Fazer Upload de Mídia</label>
                <input class="form-control @error("file") is-invalid @enderror" type="file" id="file" name="file">
                @error('file')
                <div class="invalid-feedback">
                 {{ $message }}
                </div>
                @enderror
              </div>
              <div>
                <button class="btn btn-noweb">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row">
      @forelse ($medias as $media)
      <div class="col-12 col-sm-6 col-md-3 mb-4">
        <div class="card">
          <div class="card-header text-truncate">{{ $media->name; }}</div>
          <div class="card-body">
            <img src="{{ asset('storage/'.$media->path) }}" alt="" class="card-image rounded">
          </div>
          <div class="card-footer d-flex align-items-center gap-2">
            <form action="{{ route('control.medias.destroy', ['media' => $media->id]) }}" method="POST">
              <div class="modal fade" tabindex="-1" id="deleteModal" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="deleteModalLabel">Confirmar exclusão</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>Ao exluir essa image, ela também será excluída de todos as páginas, banners, eventos, projetos, palestras e galerias as quais ela estiver atrelada.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary">Confirmar</button>
                    </div>
                  </div>
                </div>
              </div>
              @csrf
              @method('DELETE')
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Excluir</button>
            </form>
          </div>
        </div>
      </div>
      @empty
        <div class="col-12">
          <h4 class="text-center">Nenhuma Mídia Cadastrada no Site</h4>
        </div>
      @endforelse
    </div>
  </div>
</x-control.templates.base>
