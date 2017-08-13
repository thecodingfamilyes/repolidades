@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
	<div class="d-flex align-items-stretch full-content home-bg">
		<div class="flex-fullsize d-flex justify-content-center overlay-dark">
			<div class="align-self-center">
				<div class="inner cover text-center text-light p-2 mw-md-75 mw-lg-50">
					<h1 class="cover-heading">Repostería y Manualidades</h1>
					<p class="lead">Repostería y manualidades 100% caseras para cualquier ocasión, totalmente personalizadas y realizadas con todo el cariño. Echa un vistazo a nuestros catálogos.</p>
					<p class="lead">
						<a href="{{ url('/catalog/reposteria') }}" class="btn btn-lg btn-primary-brand">Repostería</a>
						<a href="{{ url('/catalog/manualidades') }}" class="btn btn-lg btn-primary-brand">Manualidades</a>
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection
