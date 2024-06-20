@extends('layouts.base')

@section('body')
	<div x-data="{ userDropdownOpen: false, mobileNavOpen: false }"
	     id="page-container"
	     class="mx-auto flex flex-col justify-between min-h-dvh w-full min-w-[320px] bg-gray-100 dark:bg-gray-900 dark:text-gray-100">


		<x-header/>

		<main id="page-content" class="flex max-w-full flex-auto flex-col my-10">
			<div class="px-10">
				@yield('content')

				@isset($slot)
					{{ $slot }}
				@endisset
			</div>
		</main>

		<x-footer/>
	</div>
@endsection
