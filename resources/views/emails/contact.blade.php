@component('mail::message')
# Contato recebido

Novo contato recebido.

**Nome**: {{ $name }}

**Email**: {{ $email }}

**Mensagem**: {{ $subject }}

{{ config('app.name') }}
@endcomponent
