@component('mail::message')

# Mensaje de {{ $data['name'] }}

{{ $data['name'] }} ha enviado un mensaje con el siguiente texto

    {{ $data['body'] }}

@endcomponent
