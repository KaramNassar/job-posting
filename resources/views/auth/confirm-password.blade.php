@extends('layouts.app')

@section('content')
	<x-page-heading>Confirm Password</x-page-heading>

	<x-forms.form method="POST" action="{{ route('password.confirm') }}">
		<div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
			{{ __('Please confirm your password before continuing.') }}
		</div>
		@csrf

		<!-- Password -->
		<div>
			<x-forms.input id="password" class="block mt-1 w-full"
			               type="password"
			               name="password"
			               label="Password"
			               required autocomplete="current-password"/>

			<x-forms.error :messages="$errors->get('password')" class="mt-2"/>
		</div>

		<div class="flex justify-end mt-4">
			<x-forms.button>
				{{ __('Confirm') }}
			</x-forms.button>
		</div>
	</x-forms.form>
@endsection