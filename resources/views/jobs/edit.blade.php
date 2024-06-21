@extends('layouts.app')

@section('content')
	<x-page-heading>Edit Job</x-page-heading>

	<x-forms.form method="POST" action="{{ route('jobs.update', $job) }}">
		@method('PATCH')
		<x-forms.input label="Title" name="title" placeholder="CEO" value="{{ old('name', $job->title) }}"/>

		<x-forms.input label="Salary" name="salary" placeholder="$90,000 USD" value="{{ old('name', $job->salary) }}"/>
		<x-forms.input label="Location" name="location" placeholder="Florida, USA"
		               value="{{ old('name', $job->location) }}"/>

		<x-forms.select label="Schedule" name="schedule">
			<option @selected($job->shcedule === 'Part Time')>Part Time</option>
			<option @selected($job->shcedule === 'Full Time')>Full Time</option>
		</x-forms.select>

		<x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"
		               value="{{ old('url', $job->url) }}"/>
		<x-forms.checkbox label="Feature (Costs Extra)" name="featured" :checked="$job->featured === 1"/>

		<x-forms.divider/>

		<x-forms.select label="Tags" id="tags" name="tags[]" placeholder="Select tags" multiple>
			@foreach ($tags as $id => $tag)
				<option value="{{ $tag }}" @selected(old('tags') ? in_array($tag, old('tags')) : $selectedTags->contains($tag))>{{ $tag }}</option>
			@endforeach
		</x-forms.select>

		<x-forms.button class="mt-6">Update</x-forms.button>
	</x-forms.form>

@endsection