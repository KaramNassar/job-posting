<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@hasSection('title')

		<title>@yield('title') - {{ config('app.name') }}</title>
	@else
		<title>{{ config('app.name') }}</title>
	@endif

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">

	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
	@livewireStyles
	@livewireScripts

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-black text-white font-hanken-grotesk">
@yield('body')
</body>
</html>
