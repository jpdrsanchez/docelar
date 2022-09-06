<x-control.templates.base title="Opções Gerais">
  <div class="container">
    <h1>Configurações gerais do site</h1>
    <p>Atualizar configurações gerais do site</p>
    <hr>
    <form action="#" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        @foreach($configs as $config)
        <div class="col-12 mb-3 @if ($config->field_type === 'text') col-lg-6  @endif">
          <label for="{{ $config->field_name }}" class="form-label">{{ $config->field_name }}</label>
          @if ($config->field_type === 'textarea')
          <textarea name="{{ $config->field_name }}" id="{{ $config->field_name }}" class="form-control" rows="5">{{ $config->field_value }}</textarea>
          @else
          <input type="text" name="{{ $config->field_name }}" id="{{ $config->field_name }}" class="form-control" value="{{ $config->field_value }}">
          @endif
        </div>
        @endforeach
      </div>
    </form>
  </div>
</x-control.templates.base>
