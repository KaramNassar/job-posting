@extends('layouts.app')

@section('content')
	<x-page-heading>Register</x-page-heading>

	<x-forms.form method="POST" action="{{ route('login-user.store') }}">
		<x-forms.input label="Email" name="email" type="email"/>
		<x-forms.input label="Password" name="password" type="password"/>

		<x-forms.button>Create Account</x-forms.button>
	</x-forms.form>
@endsection