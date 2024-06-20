@props(['employer'])
<x-panel class="flex flex-col text-center">
	<div class="self-start text-sm"><x-employer-logo :employer="$employer" :width="42"/></div>

	<div class="py-16">
		<h3 class="group-hover:text-blue-400 text-xl font-bold transition-colors duration-300">
			{{ $employer->name }}
		</h3>
	</div>

	<div class="flex justify-between items-center mt-auto">
		<x-nav-link href="{{ route('employers.jobs', $employer) }}" class="border-opacity-100 border-gray-100">Browse Their Jobs</x-nav-link>
		<x-nav-link href="{{ $employer->website }}" class="border-opacity-100 border-gray-100">Visit Their Website</x-nav-link>
	</div>
</x-panel>
