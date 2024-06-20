@props(['employer', 'width' => 90])
<a href="{{ $employer->website }}">
	<img src="{{ asset($employer->logo) }}" alt="Employer Logo" class="rounded-xl" width="{{ $width }}">
</a>