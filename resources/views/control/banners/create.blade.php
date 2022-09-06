<x-control.templates.base title="Criar Novo Banner">
  <div class="container">
    <h1>Criar Banner</h1>
    <p>Cadastrar novo banner no sistema</p>
    <hr>
    <form action="{{ route('control.banners.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="modal fade" id="imagesModal" tabindex="-1" aria-labelledby="imagesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="imagesModalLabel">Mídias da Aplicação</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                @forelse ($medias as $media)
                  <div class="col-12 col-sm-6 col-md-4">
                    <div class="card" data-card>
                      <div class="card-header text-truncate">{{ $media->name; }}</div>
                      <div class="card-body">
                        <img src="{{ asset('storage/'.$media->path) }}" alt="" class="card-image rounded">
                      </div>
                      <div class="card-footer d-flex align-items-center gap-2">
                        <button class="btn btn-noweb" type="button" data-select>Selecionar</button>
                        <input type="radio" name="image_id" id="image_id" value="{{ $media->id }}" data-input class="visually-hidden">
                      </div>
                    </div>
                  </div>
                @empty
                  <div class="col-12">
                    <h4 class="text-center">Nenhuma Mídia Cadastrada no Site</h4>
                  </div>
                @endforelse
                <div class="col-12 col-sm-6 mt-4">
                  <label for="file" class="form-label">Fazer upload:</label>
                  <input type="file" class="form-control @error("image") is-invalid @enderror" id="image" name="image" data-upload>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="mb-3 col-12 col-lg-6">
          <label for="title" class="form-label">Título</label>
          <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
          @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-6">
          <label for="type" class="form-label">Tipo</label>
          <select class="form-select @error("type") is-invalid @enderror" id="type" name="type">
            <option selected disabled>Selecione o tipo do banner</option>
            @foreach ($types as $type)
              <option value="{{ $type->value }}" selected={{ old('type') == $type->value }}>{{ $type->placeholder() }}</option>
            @endforeach
          </select>
          @error('type')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="description" class="form-label">Descrição</label>
          <textarea name="description" id="description" rows="5" class="form-control @error("description") is-invalid @enderror">{{ old('description') }}</textarea>
          @error('description')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-4">
          <label class="form-label">Imagem</label>
          <button type="button" class="btn btn-noweb" data-bs-toggle="modal" data-bs-target="#imagesModal" style="width: 100%; display: block">
            <ion-icon name="images"></ion-icon>
            Selecionar imagem
          </button>
          @error('image')
            <div class="text-danger">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-4">
          <label for="link" class="form-label">Link</label>
          <input type="text" name="link" id="link" class="form-control @error("link") is-invalid @enderror" value="{{ old('link') }}">
          @error('link')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-4">
          <label for="button_text" class="form-label">Texto do Botão</label>
          <input type="text" name="button_text" id="button_text" class="form-control @error("button_text") is-invalid @enderror" value="{{ old('button_text') }}">
          @error('button_text')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
      </div>
      <hr>
      <div class="d-flex align-items-center gap-2">
        <button type="submit" class="btn btn-noweb">Criar</button>
        ou
        <a href="{{ back() }}" class="btn btn-outline-noweb">Voltar</a>
      </div>
    </form>
  </div>
</x-control.templates.base>
