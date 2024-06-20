@extends('layouts.app')

@section('content')
	<x-page-heading>Jobs Posted By {{ $employer->name }}</x-page-heading>
	<div class="space-y-10">
		<section class="pt-10">
			<div class="grid lg:grid-cols-3 gap-8 mt-6">
				@foreach($employer->jobs as $job)
					<x-job-card :$job/>
				@endforeach
			</div>
		</section>
	</div>

@endsection
