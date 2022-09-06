<x-control.templates.base title="Criar Nova Palestra">
  <div class="container">
    <h1>Criar Banco</h1>
    <p>Cadastrar novo banco no sistema</p>
    <hr>
    <form action="{{ route('control.banks.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <x-control.components.images-modal :medias="$medias" />
      <div class="row">
        <div class="mb-3 col-12 col-lg-4">
          <label for="agency" class="form-label">Agência</label>
          <input type="text" class="form-control @error("agency") is-invalid @enderror" id="agency" name="agency" value="{{ old('agency') }}">
          @error('agency')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-4">
          <label for="account" class="form-label">Conta</label>
          <input type="text" name="account" id="account" class="form-control @error("account") is-invalid @enderror" value="{{ old('account') }}">
          @error('account')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-4">
          <label for="code" class="form-label">Código do Banco</label>
          <input type="number" name="code" id="code" class="form-control @error("code") is-invalid @enderror" value="{{ old('code') }}">
          @error('code')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-6">
          <label for="name" class="form-label">Proprietário</label>
          <input type="text" name="name" id="name" class="form-control @error("name") is-invalid @enderror" value="{{ old('name') }}">
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-6">
          <label class="form-label" for="document_type">Tipo de Documento</label>
          <select name="document_type" id="document_type" class="form-control @error("document_type") is-invalid @enderror">
            <option value="CPF">CPF</option>
            <option value="CNPJ">CNPJ</option>
          </select>
          @error('document_type')
            <div class="text-danger">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-6">
          <label for="document_value" class="form-label">Número do Documento</label>
          <input type="number" name="document_value" id="document_value" class="form-control @error("document_value") is-invalid @enderror">
          @error('document_value')
            <div class="text-danger">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3 col-12 col-lg-6">
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
        <a href="{{ route('control.banks.index') }}" class="btn btn-outline-noweb">Voltar</a>
      </div>
    </form>
  </div>
</x-control.templates.base>
