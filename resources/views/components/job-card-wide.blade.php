@props(['job'])

<x-panel class="flex gap-x-6 cursor-pointer">
	<div class="z-50">
		<x-employer-logo :employer="$job->employer"/>
	</div>
	<a href="{{ $job->url }}" target="_blank" class="absolute w-full h-full top-0 left-0"></a>
	<div class="flex-1 flex flex-col">
		<div class="self-start text-sm text-gray-400">{{ $job->employer->name }}</div>

		<h3 class="group-hover:text-blue-400 font-bold text-xl my-6 transition-colors duration-300">
			<a href="{{ $job->url }}" target="_blank">
				{{ $job->title }}
			</a>
		</h3>
		<p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>
	</div>

	<div class="space-y-1 sm:space-x-1 flex flex-col sm:block z-50">
		@foreach($job->tags as $tag)
			<x-tag :$tag/>
		@endforeach
	</div>
</x-panel>