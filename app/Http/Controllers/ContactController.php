<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function create()
	{
		return view('contact');
	}

	public function store(Request $request)
	{
		$validated = $request->validate([
			'name'    => ['required'],
			'email'   => ['required', 'email'],
			'message' => ['required', 'max:1000'],
		]);

		dd($validated);
	}
}
