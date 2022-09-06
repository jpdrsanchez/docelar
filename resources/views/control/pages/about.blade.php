<x-control.templates.base title="Editar Página">
  <div class="container">
    <h1>Editar Página</h1>
    <p>Edite página cadastrada no sistema</p>
    <hr>
    <form action="{{ route('control.aboutpage.update', ['aboutpage' => $about->id]) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="mb-3 col-12">
          <label for="title_seo" class="form-label">Título SEO</label>
          <input type="text" name="title_seo" id="title_seo" class="form-control @error('title_seo') is-invalid @enderror" value="{{ old('title_seo') ? old('title_seo') : $about->title_seo }}">
          @error('title_seo')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="description_seo" class="form-label">Descrição SEO</label>
          <div data-quill style="height: 130px">{!! old('description_seo') ? old('description_seo') : $about->description_seo !!}</div>
          <input class="form-control @error('description_seo') is-invalid @enderror" type="hidden" name="description_seo" id="description_seo" value={{ old('description_seo') ? old('description_seo') : $about->description_seo }}>
          @error('description_seo')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-6">
          <label for="title" class="form-label">Título Principal</label>
          <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ? old('title') : $about->title }}">
          @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-6">
          <label for="subtitle" class="form-label">Subtítulo</label>
          <input type="text" name="subtitle" id="subtitle" class="form-control @error('subtitle') is-invalid @enderror" value="{{ old('subtitle') ? old('subtitle') : $about->subtitle }}">
          @error('subtitle')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="content" class="form-label">Conteúdo da Página</label>
          <div data-quill style="height: 130px">{!! old('content') ? old('content') : $about->content !!}</div>
          <input type="hidden" name="content" id="content" value={{ old('content') ? old('content') : $about->content }} class="form-control @error('content') is-invalid @enderror">
          @error('content')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-6">
          <label for="image_one" class="form-label">Primeira Imagem</label>
          <input type="file" name="image_one" id="image_one" class="form-control @error('image_one') is-invalid @enderror" value={{ old('image_one') }}>
          @if ($about->image_one)
          <img src="{{ asset($about->image_one) }}" alt="" style="display: block; max-width: 100%" class="mt-3">
          @endif
          @error('image_one')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-6">
          <label for="image_two" class="form-label">Segunda Imagem</label>
          <input type="file" name="image_two" id="image_two" class="form-control @error('image_two') is-invalid @enderror" value={{ old('image_two') }}>
          @if ($about->image_two)
          <img src="{{ asset($about->image_two) }}" alt="" style="display: block; max-width: 100%" class="mt-3">
          @endif
          @error('image_two')
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
