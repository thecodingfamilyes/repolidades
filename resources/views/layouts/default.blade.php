<html>
	<head>
		@include('partials.head')
	</head>
	<body>
		@include('partials.navbar')

		<div class="content-wrapper navbar-space pt-4">
			@yield('content')
		</div>
	</body>
</html>
