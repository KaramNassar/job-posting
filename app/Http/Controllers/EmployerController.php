<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\View\View;

use function view;

class EmployerController extends Controller
{
	public function index(): View
	{
		$employers = Employer::simplePaginate(15);

		return view('employers.index', [
			'employers' => $employers
		]);
	}

	public function show(Employer $employer): View
	{
		return view('employers.show', [
			'employer' => $employer
		]);
	}
}
