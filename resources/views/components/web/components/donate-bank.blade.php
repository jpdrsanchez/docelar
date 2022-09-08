<div class="donate-bank">
  <div class="donate-bank__image">
    @if ($image)
    <img src="{{ $image }}" alt="{{ $bank }}">
    @endif
  </div>
  <ul class="donate-bank__list">
    <li class="donate-bank__item">
      <p><span>Agência: </span> {{ $agency }}</p>
    </li>
    <li class="donate-bank__item">
      <p><span>Conta: </span> {{ $account }}</p>
    </li>
    <li class="donate-bank__item">
      <p><span>Banco: </span> {{ $bank }}</p>
    </li>
    <li class="donate-bank__item">
      <p><span>Nome: </span> {{ $name }}</p>
    </li>
    <li class="donate-bank__item">
      <p><span>CNPJ: </span> {{ $document }}</p>
    </li>
  </ul>
</div>
