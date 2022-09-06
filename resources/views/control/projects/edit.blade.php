<x-control.templates.base title="Editar Projeto">
  <div class="container">
    <h1>Editar Projeto</h1>
    <p>Edite o projeto cadastrado no sistema</p>
    <hr>
    <form action="{{ route('control.projects.update', ['project' => $project->id]) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <x-control.components.images-modal :medias="$medias" :id="isset($project->media[0]) && !empty($project->media[0]) ? $project->media[0]->id : null" />
      <div class="row">
        <div class="mb-3 col-12 col-lg-6">
          <label for="title" class="form-label">Título</label>
          <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" name="title" value="{{ old('title') ? old('title') : $project->title }}">
          @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-6">
          <label for="type" class="form-label">Data</label>
          <input type="date" name="date" id="date" class="form-control" value="{{ old('date') ? old('date') : $project->date }}">
          @error('date')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="description" class="form-label">Introdução</label>
          <textarea name="introduction" id="introduction" rows="5" class="form-control @error("introduction") is-invalid @enderror">{{ old('introduction') ? old('introduction') : $project->introduction }}</textarea>
          @error('description')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="description" class="form-label">Descrição</label>
          <textarea name="description" id="description" rows="5" class="form-control @error("description") is-invalid @enderror">{{ old('description') ? old('description') : $project->description}}</textarea>
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
        <button type="submit" class="btn btn-noweb">Atualizar</button>
        ou
        <a href="{{ route('control.projects.index') }}" class="btn btn-outline-noweb">Voltar</a>
      </div>
    </form>
  </div>
</x-control.templates.base>
