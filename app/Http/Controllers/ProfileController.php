<?php

namespace App\Http\Controllers;

use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

use function auth;
use function back;

class ProfileController extends Controller
{
	public function edit()
	{
		return view('profile.edit', [
			'user' => auth()->user()
		]);
	}

	public function editPassword()
	{
		return view('password.edit');
	}

	public function updatePassword(Request $request)
	{
		$request->validate([
			'current_password' => ['required', new MatchOldPassword()],
			'password'         => ['required', 'nullable', 'confirmed', Password::min(6)],
		]);

		auth()->user()->update([
			'password' => $request->password
		]);

		return back()->with('status', 'Your password has been changed successfully.');
	}

	public function update(Request $request)
	{
		$userAttributes = $request->validate([
			'name'  => ['required'],
			'email' => ['required', 'email', Rule::unique('users')->ignore(auth()->id())],

		]);

		$employerAttributes = $request->validate([
			'employer' => ['required'],
			'logo'     => ['nullable', File::types(['png', 'jpg', 'webp'])],
			'website'  => ['nullable', 'url']
		]);

		$user = auth()->user();


		$user->update($userAttributes);

		$logoPath = $request->hasFile('logo') ? $request->logo->store('logos') : $user->employer->logo;

		$user->employer()->update([
			'name'    => $employerAttributes['employer'],
			'logo'    => $logoPath,
			'website' => $employerAttributes['website']
		]);

		return back()->with('status', 'Your profile has been updated successfully.');
	}
}




