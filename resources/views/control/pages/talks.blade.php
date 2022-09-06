<x-control.templates.base title="Editar Página">
  <div class="container">
    <h1>Editar Página</h1>
    <p>Edite página cadastrada no sistema</p>
    <hr>
    <form action="{{ route('control.talkspage.update', ['talkspage' => $talks->id]) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="mb-3 col-12">
          <label for="title_seo" class="form-label">Título SEO</label>
          <input type="text" name="title_seo" id="title_seo" class="form-control @error('title_seo') is-invalid @enderror" value="{{ old('title_seo') ? old('title_seo') : $talks->title_seo }}">
          @error('title_seo')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="description_seo" class="form-label">Descrição SEO</label>
          <div data-quill style="height: 130px">{!! old('description_seo') ? old('description_seo') : $talks->description_seo !!}</div>
          <input class="form-control @error('description_seo') is-invalid @enderror" type="hidden" name="description_seo" id="description_seo" value="{{ old('description_seo') ? old('description_seo') : $talks->description_seo }}">
          @error('description_seo')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="form_title" class="form-label">Título do Formulário</label>
          <input type="text" name="form_title" id="form_title" class="form-control @error('form_title') is-invalid @enderror" value="{{ old('form_title') ? old('form_title') : $talks->form_title }}">
          @error('form_title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <hr>
        <div class="d-flex align-items-center gap-2">
          <button type="submit" class="btn btn-noweb">Atualizar</button>
          ou
          <a href="{{ route('control.home') }}" class="btn btn-outline-noweb">Voltar</a>
        </div>
      </div>
    </form>
  </div>
</x-control.templates.base>
