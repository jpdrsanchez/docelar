<x-control.templates.base title="Editar Página">
  <div class="container">
    <h1>Editar Página</h1>
    <p>Edite página cadastrada no sistema</p>
    <hr>
    <form action="{{ route('control.donatepage.update', ['donatepage' => $donate->id]) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="mb-3 col-12">
          <label for="title_seo" class="form-label">Título SEO</label>
          <input type="text" name="title_seo" id="title_seo" class="form-control" value="{{ old('title_seo') ? old('title_seo') : $donate->title_seo }}">
          @error('title_seo')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="description_seo" class="form-label">Descrição SEO</label>
          <textarea rows="5" name="description_seo" id="description_seo" class="form-control">{{ old('description_seo') ? old('description_seo') : $donate->description_seo }}</textarea>
          @error('description_seo')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-6">
          <label for="title" class="form-label">Título Principal</label>
          <input type="text" name="title" id="title" class="form-control" value="{{ old('title') ? old('title') : $donate->title }}">
          @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-6">
          <label for="subtitle" class="form-label">Subtítulo</label>
          <input type="text" name="subtitle" id="subtitle" class="form-control" value="{{ old('subtitle') ? old('subtitle') : $donate->subtitle }}">
          @error('subtitle')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="content" class="form-label">Conteúdo da Página</label>
          <textarea rows="5" name="content" id="content" class="form-control">{{ old('content') ? old('content') : $donate->content }}</textarea>
          @error('content')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="donate_title" class="form-label">Título Seção de Doação</label>
          <input type="text" name="donate_title" id="donate_title" class="form-control" value="{{ old('donate_title') ? old('donate_title') : $donate->donate_title }}">
          @error('donate_title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="donate_content" class="form-label">Conteúdo Seção de Doação</label>
          <textarea rows="5" name="donate_content" id="donate_content" class="form-control">{{ old('donate_content') ? old('donate_content') : $donate->donate_content }}</textarea>
          @error('donate_content')
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
