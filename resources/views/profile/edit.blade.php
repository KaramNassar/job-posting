@extends('layouts.app')

@section('content')
	<x-page-heading>Update Your Profile</x-page-heading>

	@if (session('status'))
		<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative max-w-2xl mx-auto" role="alert">
			<strong class="font-bold">{{ session('status') }}</strong>
		</div>
	@endif

	<x-forms.form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
		<x-forms.input label="Name" name="name" value="{{ old('name', $user->name) }}"/>
		<x-forms.input label="Email" name="email" type="email" value="{{ old('email', $user->email) }}"/>

		<x-forms.divider/>

		<x-forms.input label="Employer Name" name="employer" value="{{ old('employer', $user->employer->name) }}"/>
		<x-forms.input label="Employer logo" name="logo" type="file"/>
		<img src="{{ old('logo', $user->employer->logo) }}" alt="User Employer Logo" width="200">
		<x-forms.input label="Employer Website" name="website" value="{{ old('website', $user->employer->website) }}"/>

		<x-forms.button>Update</x-forms.button>
	</x-forms.form>
@endsection