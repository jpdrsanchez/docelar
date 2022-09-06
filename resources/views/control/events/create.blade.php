<x-control.templates.base title="Criar Novo Evento">
  <div class="container">
    <h1>Criar Evento</h1>
    <p>Cadastrar novo evento no sistema</p>
    <hr>
    <form action="{{ route('control.events.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <x-control.components.images-modal :medias="$medias" />
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
          <label for="date" class="form-label">Data</label>
          <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}">
          @error('date')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="introduction" class="form-label">Introdução</label>
          <div data-quill style="height: 130px">{{ old('introduction') }}</div>
          <input type="hidden" name="introduction" id="introduction" value={{ old('introduction') }}>
          @error('introduction')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="description" class="form-label">Descrição</label>
          <div data-quill style="height: 130px">{{ old('description') }}</div>
          <input type="hidden" name="description" id="description" value={{ old('description') }}>
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
      </div>
      <hr>
      <div class="d-flex align-items-center gap-2">
        <button type="submit" class="btn btn-noweb">Criar</button>
        ou
        <a href="{{ route('control.events.index') }}" class="btn btn-outline-noweb">Voltar</a>
      </div>
    </form>
  </div>
</x-control.templates.base>
