<li class="schedule-card schedule-card--{{ $type }}">
  <div class="schedule-card__linear"></div>
  <img src="{{ $background }}" alt="" aria-hidden="true" class="schedule-card__image">
  <div class="schedule-card__inner">
    <h3 class="schedule-card__title">{{ $title }}</h3>
    <p class="schedule-card__text">{{ $content }}</p>
    <a href="{{ $link }}" class="schedule-card__button">
      Saiba mais
    </a>
  </div>
</li>
