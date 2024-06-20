<div x-cloak x-show="mobileNavOpen" class="lg:hidden">
	<nav
			class="flex flex-col gap-2 border-t border-gray-200 py-4 dark:border-gray-700"
	>
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
</div>