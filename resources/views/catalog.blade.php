@extends('layouts.default')

@section('title', 'Repostería')

@section('content')
	<h1 class="text-center">{{ ucfirst($title) }}</h1>
	<p class="text-center px-3">En esta sección podrás encontrar una gran variedad de productos de repostería 100% caseros.</p>
	<div class="catalog-wrapper mw-md-75">
		<div class="card-columns">
			@foreach ($data as $product)
				<div class="card">
					<img class="card-img-top" src="http://4.bp.blogspot.com/-W3leNQisv_k/T-rl5Vb09fI/AAAAAAAAAkA/1C-16fq2tGQ/s1600/tarta+de+queso.pngs" alt="Card image cap">
					<div class="card-body">
						<h4 class="card-title">{{ $product->name }}</h4>
						<p class="card-text">{{ $product->reference }}</p>
						<p class="card-text">{{ $product->description }}</p>
						<p class="card-text"><small class="text-muted">{{ $product->price }}</small></p>
						<p class="card-text"><small class="text-muted">{{ $product->category }}</small></p>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection
