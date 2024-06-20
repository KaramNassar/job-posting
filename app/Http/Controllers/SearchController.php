<?php

namespace App\Http\Controllers;

use App\Models\Job;

use function request;
use function view;

class SearchController extends Controller
{
	public function __invoke()
	{
		$jobs = Job::where('title', 'LIKE', '%'.request('q').'%')->get();

		return view('results', [
			'jobs' => $jobs
		]);
	}
}
