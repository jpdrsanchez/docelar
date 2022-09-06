<div class="modal fade" id="imagesModal" tabindex="-1" aria-labelledby="imagesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imagesModalLabel">Mídias da Aplicação</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          @forelse ($medias as $media)
            <div class="col-12 col-sm-6 col-md-4">
              <div class="card" data-card>
                <div class="card-header text-truncate">{{ $media->name; }}</div>
                <div class="card-body">
                  <img src="{{ storage_path($media->path) }}" alt="{{ $media->name }}" class="card-image rounded">
                </div>
                <div class="card-footer d-flex align-items-center gap-2">
                  <button class="btn btn-noweb" type="button" data-select>Selecionar</button>
                  <input type="radio" name="image_id" id="image_id" value="{{ $media->id }}" data-input class="visually-hidden" @if ($id === $media->id) checked @endif>
                </div>
              </div>
            </div>
          @empty
            <div class="col-12">
              <h4 class="text-center">Nenhuma Mídia Cadastrada no Site</h4>
            </div>
          @endforelse
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 mt-4">
            <label for="file" class="form-label">Fazer upload:</label>
            <input type="file" class="form-control" id="image" name="image" data-upload>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
