@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
	<div class="d-flex align-items-stretch full-content home-bg">
		<div class="flex-fullsize d-flex justify-content-center overlay-dark">
			<div class="align-self-center">
				<div class="inner cover text-center text-light p-2 mw-md-75 mw-lg-50">
					<h1 class="cover-heading">Repostería y Manualidades</h1>
					<p class="lead">Repostería y manualidades 100% caseras para cualquier ocasión, totalmente personalizadas y realizadas con todo el cariño. Echa un vistazo a nuestros portfolios para ver algunas de las cosas que hemos hecho.</p>

					<div class="text-center m-3 mr-auto ml-auto mw-md-75 row">
						<a href="{{ url('/catalog/reposteria') }}" class="col mr-3 btn btn-secondary">Repostería</a>
						<a href="{{ url('/catalog/manualidades') }}" class="col btn btn-secondary">Manualidades</a>
					</div>

                    <p class="lead">
                        <a href="{{ url('/contacto') }}" class="btn btn-lg btn-primary">Contactar</a>
                    </p>
				</div>
			</div>
		</div>
	</div>
@endsection
