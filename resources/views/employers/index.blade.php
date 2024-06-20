@extends('layouts.app')

@section('content')
	<div class="dark:bg-gray-900 dark:text-gray-100">
		<div class="container mx-auto px-4 py-16 lg:px-8 lg:py-32 xl:max-w-7xl">
			<div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
				@foreach($employers as $employer)
					<x-employer-card :$employer/>

				@endforeach
			</div>
		</div>
	</div>

	{{ $employers->links() }}
@endsection