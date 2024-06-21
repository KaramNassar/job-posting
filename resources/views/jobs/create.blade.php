@extends('layouts.app')

@section('content')
	<x-page-heading>New Job</x-page-heading>

	<x-forms.form method="POST" action="{{ route('jobs.store') }}">
		<x-forms.input label="Title" name="title" placeholder="CEO"/>

		<x-forms.input label="Salary" name="salary" placeholder="$90,000 USD"/>
		<x-forms.input label="Location" name="location" placeholder="Florida, USA"/>

		<x-forms.select label="Schedule" name="schedule">
			<option>Part Time</option>
			<option>Full Time</option>
		</x-forms.select>

		<x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"/>
		<x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>

		<x-forms.divider/>

		<x-forms.select label="Tags" id="tags" name="tags[]" placeholder="Select tags" multiple>
			@foreach ($tags as $id => $tag)
				<option value="{{ $tag }}" @selected(old('tags') && in_array($tag, old('tags')))>{{ $tag }}</option>
			@endforeach
		</x-forms.select>


		<x-forms.button>Publish</x-forms.button>
	</x-forms.form>
@endsection
