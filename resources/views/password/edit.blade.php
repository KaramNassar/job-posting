@extends('layouts.app')

@section('content')
	<x-page-heading>Update Your Password</x-page-heading>

	@if (session('status'))
		<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative max-w-2xl mx-auto" role="alert">
			<strong class="font-bold">{{ session('status') }}</strong>
		</div>
	@endif



	<x-forms.form method="POST" action="{{ route('password.update') }}">
		<x-forms.input label="current Password" name="current_password" type="password"/>
		<x-forms.input label="New Password" name="password" type="password"/>
		<x-forms.input label="New Password Confirmation" name="password_confirmation" type="password"/>

		<x-forms.button>Update</x-forms.button>
	</x-forms.form>
@endsection
