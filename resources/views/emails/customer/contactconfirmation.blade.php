@component('mail::message')

# Confirmación de envío de mensaje

Hola {{ $data['name'] }},

Este email es para confirmarte que tu mensaje ha sido enviado correctamente.

## Mensaje enviado

{{ $data['body'] }}

@endcomponent
