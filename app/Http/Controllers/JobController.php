<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

use function explode;
use function redirect;
use function view;

class JobController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$featuredJobs = Job::whereFeatured(true)->latest()->get();
		$jobs = Job::latest()->get();

		return view('jobs.index', [
			'featuredJobs' => $featuredJobs,
			'jobs'         => $jobs,
			'tags'         => Tag::all(),
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		$attributes = $request->validate([
			'title'       => ['required'],
			'salary'      => ['required'],
			'location'    => ['required'],
			'schedule'    => ['required', Rule::in(['Part Time', 'Full Time'])],
			'url'         => ['required', 'url'],
			'tags'        => ['nullable'],
		]);

		$attributes['featured'] = $request->has('featured');

		$job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

		if ($attributes['tags']) {
			foreach (explode(',', $attributes['tags']) as $tag) {
				$job->tag($tag);
			}
		}

		return redirect('/');
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('jobs.create');
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Job $job)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Job $job)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(UpdateJobRequest $request, Job $job)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Job $job)
	{
		//
	}
}
