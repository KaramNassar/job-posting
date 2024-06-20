@props(['tag', 'size' => 'base'])

@php
	$classes = 'bg-black/10 dark:bg-white/10 rounded-xl font-bold hover:bg-black/25 dark:hover:bg-white/25 transition-colors duration-300 inline-block text-center';

	if($size === 'base'){
		$classes .= ' px-5 py-1 text-sm';
	}

	if($size === 'small'){
		$classes .= ' px-3 py-1 text-2xs';
	}

@endphp
<a href="{{ route('tag', $tag->name) }}" class="{{ $classes }}">
	{{ $tag->name }}
</a>