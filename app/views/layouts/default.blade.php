<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Site Name</title>
		<!-- favicon -->
		<link rel="shortcut icon" href="img/flav/favicon.ico">
		<!-- stylesheets -->
		{{ HTML::style('assets/app.min.css') }}
	</head>
	<body>
		<!-- top nav -->
			@include('layouts.partials.nav')
		<!-- main content -->
		<div class="container">
			@include('layouts.partials.alerts')
			@yield('content')
		</div>
		<div class="container">
			@include('layouts.partials.footer')
		</div>	
		<!-- javascript -->
		{{ HTML::script('assets/app.min.js') }}
		@yield('footer')
	</body>
</html>