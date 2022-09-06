<x-control.templates.base title="Login">
  <div class="auth">
    <form class="auth__form" action={{ route('login') }} method="POST">
      @csrf
      <div class="auth__header">
        <img src="http://www.nowcloud.com.br/tools/framework/v5/images/logo-dashboard.png" alt="Noweb Publicidade">
      </div>
      <div class="auth__body">
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email_feedback" name="email" value="{{ old('email') }}">
          @error('email')
            <div id="email_feedback" class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" aria-describedby="password_feedback" name="password">
          @error('password')
            <div id="password_feedback" class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <hr>
        <button class="btn btn-noweb" type="submit">Entrar</button>
      </div>
    </form>
  </div>
</x-control.templates.base>
