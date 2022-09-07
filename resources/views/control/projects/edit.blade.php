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
        <div class="mb-3 col-12">
          <label for="title_seo" class="form-label">Título SEO</label>
          <input type="text" class="form-control @error("title_seo") is-invalid @enderror" id="title_seo" name="title_seo" value="{{ old('title_seo') ? old('title_seo') : $event->title_seo }}">
          @error('title_seo')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="description_seo" class="form-label">Descrição SEO</label>
          <div data-quill style="height: 130px">{!! old('description_seo') ? old('description_seo') : $event->description_seo !!}</div>
          <input type="hidden" name="description_seo" id="description_seo" value={{ old('description_seo') ? old('description_seo') : $event->description_seo }}>
          @error('description_seo')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
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
          <input type="date" name="date" id="date" class="form-control @error("date") is-invalid @enderror" value="{{ old('date') ? old('date') : $project->date }}">
          @error('date')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-6">
          <label for="card_text" class="form-label">Texto do Card</label>
          <input type="text" name="card_text" id="card_text" class="form-control" value="{{ old('card_text', $project->card_text) }}">
          @error('card_text')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-6 d-flex align-items-end">
          <div class="form-check form-switch d-flex gap-2 align-items-center" style="height: 38px">
            <input class="form-check-input" type="checkbox" role="switch" id="show_date" name="show_date" @checked(old('show_date', $project->show_date))>
            <label class="form-check-label" for="show_date">Mostrar a data como descrição</label>
          </div>
        </div>
        <div class="mb-3 col-12">
          <label for="introduction" class="form-label">Introdução</label>
          <div data-quill style="height: 130px">{!! old('introduction') ? old('introduction') : $project->introduction !!}</div>
          <input class="form-control @error("introduction") is-invalid @enderror" type="hidden" name="introduction" id="introduction" value={{ old('introduction') ? old('introduction') : $project->introduction }}>
          @error('introduction')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="description" class="form-label">Descrição</label>
          <div data-quill style="height: 130px">{!! old('description') ? old('description') : $project->description !!}</div>
          <input type="hidden" class="form-control @error("description") is-invalid @enderror" name="description" id="description" value={{ old('description') ? old('description') : $project->description }}>
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
