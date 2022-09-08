<form class="contact-form" method="POST" action="{{ $action }}">
  @csrf
  <h2 class="page-title contact-form__title">{{ $title }}</h2>
  <div class="contact-form__field">
    <label for="name" class="visually-hidden">Nome</label>
    <input placeholder="Nome" type="text" name="name" id="name" class="contact-form__input" value="{{ old('name') }}">
    @error('name')
      <p class="text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>
  <div class="contact-form__field">
    <label for="email" class="visually-hidden">E-mail</label>
    <input placeholder="E-mail" type="text" name="email" id="email" class="contact-form__input" value="{{ old('email') }}">
    @error('email')
      <p class="text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>
  @if ($type === 'talks')
    <div class="contact-form__field">
      <label for="talk_theme" class="visually-hidden">Tema da Palestra</label>
      <input placeholder="Tema da Palestra" type="text" name="talk_theme" id="talk_theme" class="contact-form__input" value="{{ old('talk_theme') }}">
      @error('talk_theme')
        <p class="text-danger mt-1">{{ $message }}</p>
      @enderror
    </div>
  @endif
  <div class="contact-form__field">
    <label for="message" class="visually-hidden">Mensagem</label>
    <textarea placeholder="Mensagem" name="message" id="message" class="contact-form__input contact-form__input--textarea">{{ old('message') }}</textarea>
    @error('message')
      <p class="text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>
  <button class="contact-form__button" type="submit">Enviar</button>
</form>
