<x-control.templates.base title="Editar Página">
  <div class="container">
    <h1>Editar Página</h1>
    <p>Edite página cadastrada no sistema</p>
    <hr>
    <form action="{{ route('control.homepage.update', ['homepage' => $home->id]) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="mb-3 col-12">
          <label for="title_seo" class="form-label">Título SEO</label>
          <input type="text" name="title_seo" id="title_seo" class="form-control" value="{{ old('title_seo') ? old('title_seo') : $home->title_seo }}">
          @error('title_seo')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="description_seo" class="form-label">Descrição SEO</label>
          <div data-quill style="height: 130px">{!! old('description_seo') ? old('description_seo') : $home->description_seo !!}</div>
          <input type="hidden" name="description_seo" id="description_seo" value={{ old('description_seo') ? old('description_seo') : $home->description_seo }}>
          @error('description_seo')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="about_title" class="form-label">Título Seção Sobre</label>
          <input type="text" name="about_title" id="about_title" class="form-control" value="{{ old('about_title') ? old('about_title') : $home->about_title }}">
          @error('about_title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="about_description" class="form-label">Descrição Seção Sobre</label>
          <div data-quill style="height: 130px">{!! old('about_description') ? old('about_description') : $home->about_description !!}</div>
          <input type="hidden" name="about_description" id="about_description" value={{ old('about_description') ? old('about_description') : $home->about_description }}>
          @error('about_description')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="projects_title" class="form-label">Título Seção Projetos</label>
          <input type="text" name="projects_title" id="projects_title" class="form-control" value="{{ old('projects_title') ? old('projects_title') : $home->projects_title }}">
          @error('projects_title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="projects_description" class="form-label">Descrição Seção Projetos</label>
          <div data-quill style="height: 130px">{!! old('projects_description') ? old('projects_description') : $home->projects_description !!}</div>
          <input type="hidden" name="projects_description" id="projects_description" value={{ old('projects_description') ? old('projects_description') : $home->projects_description }}>
          @error('projects_description')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="talks_title" class="form-label">Título Seção Palestras</label>
          <input type="text" name="talks_title" id="talks_title" class="form-control" value="{{ old('talks_title') ? old('talks_title') : $home->talks_title }}">
          @error('talks_title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="talks_description" class="form-label">Descrição Seção Palestras</label>
          <div data-quill style="height: 130px">{!! old('talks_description') ? old('talks_description') : $home->talks_description !!}</div>
          <input type="hidden" name="talks_description" id="talks_description" value={{ old('talks_description') ? old('talks_description') : $home->talks_description }}>
          @error('talks_description')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="donate_title" class="form-label">Título Seção de Doação</label>
          <input type="text" name="donate_title" id="donate_title" class="form-control" value="{{ old('donate_title') ? old('donate_title') : $home->donate_title }}">
          @error('donate_title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="donate_description" class="form-label">Descrição Seção de Doação</label>
          <div data-quill style="height: 130px">{!! old('donate_description') ? old('donate_description') : $home->donate_description !!}</div>
          <input type="hidden" name="donate_description" id="donate_description" value={{ old('donate_description') ? old('donate_description') : $home->donate_description }}>
          @error('donate_description')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="schedule_title" class="form-label">Título Seção Agenda</label>
          <input type="text" name="schedule_title" id="schedule_title" class="form-control" value="{{ old('schedule_title') ? old('schedule_title') : $home->schedule_title }}">
          @error('schedule_title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="schedule_description" class="form-label">Descrição Seção Agenda</label>
          <div data-quill style="height: 130px">{!! old('schedule_description') ? old('schedule_description') : $home->schedule_description !!}</div>
          <input type="hidden" name="schedule_description" id="schedule_description" value={{ old('schedule_description') ? old('schedule_description') : $home->schedule_description }}>
          @error('schedule_description')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-6">
          <label for="schedule_weekdays_opening" class="form-label">Horário de Funcionamento (Dias de Semana)</label>
          <input type="text" name="schedule_weekdays_opening" id="schedule_weekdays_opening" class="form-control" value="{{ old('schedule_weekdays_opening') ? old('schedule_weekdays_opening') : $home->schedule_weekdays_opening }}">
          @error('schedule_weekdays_opening')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-6">
          <label for="schedule_weekeend_opening" class="form-label">Horário de Funcionamento (Finais de Semana)</label>
          <input type="text" name="schedule_weekeend_opening" id="schedule_weekeend_opening" class="form-control" value="{{ old('schedule_weekeend_opening') ? old('schedule_weekeend_opening') : $home->schedule_weekeend_opening }}">
          @error('schedule_weekeend_opening')
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
