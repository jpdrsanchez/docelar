<li @class([
  'navitem',
  'dropdown' => !empty($item->dropdown),
])>
  <a
    href="{{ $item->url }}"
    @class([
      'nav-link',
      'active',
      'text-white',
      'dropdown-toggle' => !empty($item->dropdown)
    ])
    @if (!empty($item->dropdown))
      role="button"
      data-bs-toggle="dropdown"
      aria-expanded="false"
    @endif>
    {{ $item->name }}
  </a>
  @if (!empty($item->dropdown))
    <ul class="dropdown-menu">
      @foreach ($item->dropdown as $item)
        <li class="navitem">
          <a class="dropdown-item" href="{{ $item->url }}">{{ $item->name }}</a>
        </li>
      @endforeach
    </ul>
  @endif
</li>
