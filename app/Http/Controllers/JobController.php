<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

use function back;

class JobController extends Controller
{
	public function index()
	{
		$featuredJobs = Job::whereFeatured(true)->latest('updated_at')->get();
		$jobs = Job::latest('updated_at')->get();

		return view('jobs.index', [
			'featuredJobs' => $featuredJobs,
			'jobs'         => $jobs,
			'tags'         => Tag::all(),
		]);
	}

	public function store(StoreJobRequest $request)
	{
		$attributes = $request->validated();

		$attributes['featured'] = $request->has('featured');

		$job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

		if (isset($attributes['tags'])) {
			$job->syncTags($attributes['tags']);
		} else {
			$job->syncTags([]);
		}

		return redirect('/');
	}

	public function create()
	{
		$tags = Tag::all()->pluck('name');

		return view('jobs.create', [
			'tags' => $tags
		]);
	}

	public function show(Job $job)
	{
		//
	}

	public function edit(Job $job)
	{
		$tags = Tag::all()->pluck('name');
		$selectedTags = $job->tags->pluck('name');


		return view('jobs.edit', [
			'job'          => $job,
			'tags'         => $tags,
			'selectedTags' => $selectedTags,
		]);
	}

	public function update(UpdateJobRequest $request, Job $job)
	{
		$attributes = $request->validated();

		$attributes['featured'] = $request->has('featured');

		$job->update(Arr::except($attributes, 'tags'));

		if (isset($attributes['tags'])) {
			$job->syncTags($attributes['tags']);
		} else {
			$job->syncTags([]);
		}

		return redirect('/');
	}

	public function destroy(Job $job)
	{
		$job->delete();

		return back();
	}
}
