<x-control.templates.base title="Galeria">
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
          <h1><strong>{{ $gallery->name }}</strong></h1>
          <p>Gerenciar galeria</p>
        </div>
        <a data-bs-toggle="collapse" href="#upload_media" role="button" aria-expanded="false" aria-controls="upload_media" class="btn btn-noweb">
          <ion-icon name="add-circle"></ion-icon>
          Upload
        </a>
      </div>
      <div class="mb-4"></div>
      <div class="collapse @error("file") show @enderror" id="upload_media">
        <div class="card card-body">
          <form action={{ route('control.galleries.update', ['gallery' => $gallery->id]) }}" class="dropzone" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="p-3 d-flex align-items-end justify-content-between gap-3">
              <div class="flex-fill">
                <label for="file" class="form-label">Fazer Upload de Mídia</label>
                @error('file')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row mb-5">
      @forelse ($gallery->media as $media)
      <div class="col-12 col-sm-6 col-md-3 mb-4">
        <div class="card">
          <div class="card-header text-truncate">{{ $media->name; }}</div>
          <div class="card-body">
            <img src="{{ asset($media->path) }}" alt="" class="card-image rounded">
          </div>
          <div class="card-footer d-flex align-items-center gap-2">
            <form action="{{ route('control.medias.destroy', ['media' => $media->id]) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Excluir</button>
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
