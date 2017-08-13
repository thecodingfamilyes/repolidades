@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

    <div style="margin-top: 60px;" class="container">
      <h1 class="text-center">Contacto</h1>

        @if (!session('email_sent'))
    		<div class="p-3">
                <form action="/contacto" method="post">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Tu nombre" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com" required>
                  </div>
                  <div class="form-group">
                    <label for="text">Mensaje</label>
                    <textarea class="form-control" name="body" id="text" rows="5" required></textarea>
                  </div>

                  {!! Honeypot::fill('website', 'timestamp'); !!}

                  <button class="btn btn-primary" type="submit">Enviar</button>
                </form>
      		</div>
        @else
            <div class="text-center text-success">
                Tu mensaje se ha enviado con éxito
            </div>
        @endif
    </div>
@endsection
