<form class="contact-form" method="POST" action="#">
  @csrf
  <h2 class="page-title contact-form__title">{{ $title }}</h2>
  <div class="contact-form__field">
    <label for="name" class="visually-hidden">Nome</label>
    <input type="text" name="name" id="name" class="contact-form__input" value="{{ old('name') }}">
  </div>
  <div class="contact-form__field">
    <label for="email" class="visually-hidden">E-mail</label>
    <input type="text" name="email" id="email" class="contact-form__input" value="{{ old('email') }}">
  </div>
  @if ($type === 'talks')
    <div class="contact-form__field">
      <label for="talk_theme" class="visually-hidden">Tema da Palestra</label>
      <input type="text" name="talk_theme" id="talk_theme" class="contact-form__input" value="{{ old('talk_theme') }}">
    </div>
  @endif
  <div class="contact-form__field">
    <label for="message" class="visually-hidden">Mensagem</label>
    <textarea name="message" id="message" class="contact-form__input contact-form__input--textarea">{{ old('message') }}</textarea>
  </div>
  <button class="contact-form__button" type="submit">Enviar</button>
</form>
