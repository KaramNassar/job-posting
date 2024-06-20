@extends('layouts.app')

@section('content')
	<x-page-heading>Search Results for "{{ request()->q }}"</x-page-heading>
	<div class="space-y-10">
		<section class="text-center pt-6">
			<x-forms.form action="{{ route('search') }}" class="mt-6">
				<x-forms.input :label="false" name="q" placeholder="Web Developer..." value="{{ request()->q }}"/>
			</x-forms.form>
		</section>


		<section>
			<div class="mt-6 space-y-6">
				@forelse($jobs as $job)
					<x-job-card-wide :$job/>
				@empty
					<h2 class="text-xl">No search Result Found.</h2>
				@endforelse
			</div>
		</section>
	</div>

@endsection
