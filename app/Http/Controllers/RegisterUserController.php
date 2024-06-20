<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

use function redirect;

class RegisterUserController extends Controller
{
	public function index()
	{
	}

	public function store(Request $request)
	{
		$userAttributes = $request->validate([
			'name'     => ['required'],
			'email'    => ['required', 'email', 'unique:users,email'],
			'password' => ['required', 'confirmed', Password::min(6)],
		]);

		$employerAttributes = $request->validate([
			'employer' => ['required'],
			'logo'     => ['required', File::types(['png', 'jpg', 'webp'])],
			'website'  => ['nullable', 'url']
		]);

		$user = User::create($userAttributes);

		$logoPath = $request->logo->store('logos');

		$user->employer()->create([
			'name'    => $employerAttributes['employer'],
			'logo'    => $logoPath,
			'website' => $employerAttributes['website']
		]);

		Auth::login($user);

		return redirect('/');
	}

	public function create()
	{
		return view('auth.register');
	}
}
