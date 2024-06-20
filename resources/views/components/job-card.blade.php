@props(['job'])
<x-panel class="flex flex-col text-center">
	<div class="self-start text-sm">{{ $job->employer->name }}</div>
	<a href="{{ $job->url }}" target="_blank" class="absolute w-full h-full top-0 left-0"></a>
	<div class="py-8">
		<h3 class="group-hover:text-blue-400 text-xl font-bold transition-colors duration-300">
			{{ $job->title }}
		</h3>
		<p class="text-sm mt-4">{{ $job->salary }}</p>
	</div>

	<div class="flex justify-between items-center mt-auto">
		<div class="z-50">
			@foreach($job->tags as $tag)
				<x-tag :$tag size="small" class="tag-link"/>
			@endforeach

		</div>

		<div class="z-50">
			<x-employer-logo :employer="$job->employer" :width="42"/>
		</div>
	</div>
</x-panel>
