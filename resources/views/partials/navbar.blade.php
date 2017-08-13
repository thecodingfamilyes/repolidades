<header class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	<a class="navbar-brand" href="#">
		<img src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-item nav-link {{ Request::path() == '/' ? 'active' : '' }}" href="{{ url('/') }}">Inicio</a>
			<a class="nav-item nav-link {{ Request::path() == 'reposteria' ? 'active' : '' }}" href="{{ url('/reposteria') }}">Repostería</a>
			<a class="nav-item nav-link {{ Request::path() == 'manualidades' ? 'active' : '' }}" href="{{ url('/manualidades') }}">Manualidades</a>
			<a class="nav-item nav-link {{ Request::path() == 'contacto' ? 'active' : '' }}" href="{{ url('/contacto') }}">Contacto</a>
		</div>
	</div>
</header>
