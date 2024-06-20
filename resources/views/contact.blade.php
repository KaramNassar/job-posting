@extends('layouts.app')

@section('content')

	<x-page-heading>Contact Us</x-page-heading>

	<x-forms.form method="POST" action="{{ route('contact.store') }}">
		<x-forms.input label="Name" name="name"/>
		<x-forms.input label="Email" name="email" type="email"/>

		<x-forms.textarea label="Your Message" name="message"></x-forms.textarea>

		<x-forms.button>Send Message</x-forms.button>
	</x-forms.form>

@endsection