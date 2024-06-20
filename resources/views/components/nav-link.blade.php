@props(['active' => false])
@php
	$class = 'group flex items-center gap-2 rounded-lg border border-transparent
			px-3 py-2 text-sm font-medium text-gray-800 hover:bg-blue-50
			hover:text-blue-600 active:border-blue-100 dark:text-gray-200
			dark:hover:bg-gray-700 dark:hover:text-white dark:active:border-gray-600';

	if ($active){
		$class .= ' bg-blue-50 dark:bg-gray-600';
	}

@endphp


<a {{ $attributes->class($class) }}
   aria-current="{{ $active ? 'page' : 'false' }}"
		{{ $attributes }}
>
	{{ $slot }}
</a>

