<nav class="hidden items-center gap-2 lg:flex">
	@auth
		<x-nav-link href="{{ route('jobs.create') }}" :active="request()->is('jobs/create')"
		            class="border-opacity-100 border-gray-500 dark:border-gray-100">Post a Jobs
		</x-nav-link>

	@endauth
	<x-nav-link href="{{ route('jobs.index') }}" :active="request()->is('/')">Jobs</x-nav-link>
	<x-nav-link href="{{ route('employers.index') }}" :active="request()->is('employers')">Employers</x-nav-link>
	<x-nav-link href="{{ route('about') }}" :active="request()->is('about')">About us</x-nav-link>
	<x-nav-link href="{{ route('contact.create') }}" :active="request()->is('contact')">Contact us</x-nav-link>
</nav>
