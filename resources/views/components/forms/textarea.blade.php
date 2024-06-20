@props(['label', 'name'])

@php
	$defaults = [
		'id' => $name,
		'name' => $name,
		'class' => 'rounded-xl bg-white/10 border border-black/10 dark:border-white/10 px-5 py-4 w-full',
		'value' => old($name)
	];
@endphp

<x-forms.field :$label :$name>
	<textarea {{ $attributes($defaults) }}>
		{{ $slot }}
	</textarea>
</x-forms.field>

