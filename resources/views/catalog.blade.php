@extends('layouts.default')

@section('title', 'Repostería')

@section('content')
	<h1 class="text-center mt-2">{{ ucfirst($title) }}</h1>
	<p class="text-center px-3 mb-4 mw-md-75 mw-lg-50">En esta sección podrás encontrar una amplia variedad de productos 100% caseros.</p>
	<div class="catalog-wrapper mw-md-75">
        <div class="card-deck fit-grid mb-4">
            @foreach ($data as $product)
                <div class="card fit-panel">
                    <img class="card-img-top" src="{{ starts_with($product->image, 'http') ? $product->image : Storage::url($product->image) }}" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text hidden">{{ $product->reference }}</p>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text hidden"><small class="text-muted">{{ $product->price }}</small></p>
                        <p class="card-text hidden"><small class="text-muted">{{ $product->category }}</small></p>

                        <a href="/contacto" class="btn btn-outline-primary">¡Lo quiero!</a>
                    </div>
                </div>
            @endforeach
        </div>
	</div>
@endsection
