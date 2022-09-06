<x-control.templates.base title="Opções Gerais">
  <div class="container">
    @if (session('status'))
      <div class="alert alert-success d-flex align-items-center mb-2 gap-2" role="alert">
        <ion-icon name="checkmark-circle-outline"></ion-icon>
        <div>
          {{ session('status') }}
        </div>
      </div>
    @endif
    <h1>Configurações gerais do site</h1>
    <p>Atualizar configurações gerais do site</p>
    <hr>
    <form action="{{ route('control.configs.update') }}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
        @foreach($configs as $config)
        <div class="col-12 mb-3 @if ($config->field_type === 'text') col-lg-6  @endif">
          <label for="{{ $config->field_name }}" class="form-label">{{ $config->field_label }}</label>
          @if ($config->field_type === 'textarea')
          <div data-quill style="height: 130px">{!!  $config->field_value  !!}</div>
          <input type="hidden" name="{{ $config->field_name }}" id="{{ $config->field_name }}" value="{{ $config->field_value }}">
          @else
          <input type="text" name="{{ $config->field_name }}" id="{{ $config->field_name }}" class="form-control" value="{{ $config->field_value }}">
          @endif
        </div>
        @endforeach
      </div>
      <hr>
      <div class="d-flex align-items-center gap-2">
        <button type="submit" class="btn btn-noweb">Atualizar</button>
        ou
        <a href="{{ route('control.home') }}" class="btn btn-outline-noweb">Voltar à Home</a>
      </div>
    </form>
  </div>
</x-control.templates.base>
