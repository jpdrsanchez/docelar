<x-control.templates.base title="Editar Banner">
  <div class="container">
    <h1>Editar Banner</h1>
    <p>Edite o banner cadastrado no sistema</p>
    <hr>
    <form action="{{ route('control.banners.update', ['banner' => $banner->id]) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <x-control.components.images-modal :medias="$medias" :id="isset($banner->media[0]) && !empty($banner->media[0]) ? $banner->media[0]->id : null" />
      <div class="row">
        <div class="mb-3 col-12 col-lg-6">
          <label for="title" class="form-label">Título</label>
          <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" name="title" value="{{ old('title') ? old('title') : $banner->title }}">
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
              <option value="{{ $type->value }}" selected={{ $banner->type === $type->value }}>{{ $type->placeholder() }}</option>
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
          <textarea name="description" id="description" rows="5" class="form-control @error("description") is-invalid @enderror">{{ old('description') ? old('description') : $banner->description}}</textarea>
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
          <input type="text" name="link" id="link" class="form-control @error("link") is-invalid @enderror" value="{{ old('link') ? old('link') : $banner->link }}">
          @error('link')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-4">
          <label for="button_text" class="form-label">Texto do Botão</label>
          <input type="text" name="button_text" id="button_text" class="form-control @error("button_text") is-invalid @enderror" value="{{ old('button_text') ? old('button_text') : $banner->button_text }}">
          @error('button_text')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
      </div>
      <hr>
      <div class="d-flex align-items-center gap-2">
        <button type="submit" class="btn btn-noweb">Atualizar</button>
        ou
        <a href="{{ back() }}" class="btn btn-outline-noweb">Voltar</a>
      </div>
    </form>
  </div>
</x-control.templates.base>
