@extends('layouts.base')

@section('body')
	<div class="px-10">
		<nav class="flex justify-between items-center py-4 border-b border-white/15">
			<div>
				<a href="">
					<img src="{{ Vite::asset('resources/images/logo1.png') }}" width="91" height="28" alt="Career Spring Logo">
				</a>
			</div>

			<div class="space-x-6 font-bold text-sm">
				<a href="">Jobs</a>
				<a href="">Careers</a>
				<a href="">Salaries</a>
				<a href="">Companies</a>
			</div>

			<div>post a job</div>
		</nav>

		<main class="mt-10 max-w-[986px] mx-auto">
			@yield('content')

			@isset($slot)
				{{ $slot }}
			@endisset
		</main>
	</div>

@endsection
