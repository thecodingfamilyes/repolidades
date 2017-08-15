<html>
	<head>
		@include('partials.head')
	</head>
	<body>
		@include('partials.navbar')

		<div class="content-wrapper">
			@yield('content')
		</div>

		<footer class="fixed-bottom inner cover text-center text-light p-2">
			<p>&copy; 2017 - Página desarrollada por Lytio.</p>
		</footer>

        <script src="{{ mix('/js/app.js') }}"></script>
	</body>
</html>
