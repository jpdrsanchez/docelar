@component('mail::message')
# Nova sugestão de palestra

Nova sugestão de palestra recebida.

**Nome**: {{ $name }}

**Email**: {{ $email }}

**Sugestão**: {{ $talkTheme }}

**Mensagem**: {{ $subject }}

{{ config('app.name') }}
@endcomponent
