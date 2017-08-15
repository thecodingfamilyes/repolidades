@extends('layouts.default')

@section('title', 'Repostería')

@section('content')
	<h1 class="text-center">{{ ucfirst($title) }}</h1>
	<p class="text-center px-3">En esta sección podrás encontrar una gran variedad de productos de repostería 100% caseros.</p>
	<div class="catalog-wrapper mw-md-75">
		@php
			$columns = 2;
		@endphp

		@foreach ($data->chunk($columns) as $row)
			<div class="card-deck mb-3">
				@foreach ($row as $product)
					<div class="card">
						<img class="card-img-top" src="{{ $product->image }}" alt="Card image cap">
						<div class="card-body">
							<h4 class="card-title">{{ $product->name }}</h4>
							<p class="card-text">{{ $product->reference }}</p>
							<p class="card-text">{{ $product->description }}</p>
							<p class="card-text"><small class="text-muted">{{ $product->price }}</small></p>
							<p class="card-text"><small class="text-muted">{{ $product->category }}</small></p>

							<a href="/contacto" class="btn btn-outline-primary">¡Lo quiero!</a>
						</div>
					</div>
					@if ($row->count() < $columns)
						@for ($i = 0; $i < $columns - $row->count(); $i++)
							<div class="card border-0"></div>
						@endfor
					@endif
				@endforeach
			</div>
		@endforeach
	</div>
@endsection
