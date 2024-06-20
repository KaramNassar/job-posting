<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function redirect;
use function view;

class SessionController extends Controller
{

	public function create()
	{
		return view('auth.login');
	}

	public function store(Request $request)
	{
		$userAttributes = $request->validate([
			'email'    => ['required', 'email'],
			'password' => ['required'],
		]);

		if (Auth::attempt($userAttributes)) {
			$request->session()->regenerate();

			return redirect('/');
		}

		return back()->withErrors([
			'email' => 'The provided credentials do not match our records.',
		])->onlyInput('email');
	}

	public function destroy()
	{
		Auth::logout();

		return redirect()->intended('/');
	}

	public function confirm()
	{
		return view('confirm-password');
	}
}
