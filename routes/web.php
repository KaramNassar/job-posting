<?php

use App\Http\Controllers\confirmablePasswordController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::get('/', [JobController::class, 'index'])->name('jobs.index');

Route::get('/employers', [EmployerController::class, 'index'])->name('employers.index');
Route::get('/employers/{employer}/jobs', [EmployerController::class, 'show'])->name('employers.jobs');

Route::view('/about', 'about')->name('about');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::middleware('auth')->group(function () {
	Route::name('jobs.')->group(function () {
		Route::get('/jobs/create', [JobController::class, 'create'])->name('create');
		Route::post('/jobs', [JobController::class, 'store'])->name('store');

		Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->can('edit', 'job')->name('edit');
		Route::patch('/jobs/{job}', [JobController::class, 'update'])->can('update', 'job')->name('update');
		Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->can('delete', 'job')->name('destroy');
	});


	Route::delete('/logout', [SessionController::class, 'destroy'])->name('logout');

	Route::get('/profile', [ProfileController::class, 'edit'])->middleware('password.confirm')->name('profile.edit');
	Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

	Route::get('/password', [ProfileController::class, 'editPassword'])->name('password.edit');
	Route::post('/password', [ProfileController::class, 'updatePassword'])->name('password.update');
});

Route::get('/search', SearchController::class)->name('search');
Route::get('/tags/{tag:name}', TagController::class)->name('tag');


Route::middleware('guest')->group(function () {
	Route::name('register-user.')->group(function () {
		Route::get('/register', [RegisterUserController::class, 'create'])->name('create');
		Route::post('/register', [RegisterUserController::class, 'store'])->name('store');
	});

	Route::name('login-user.')->group(function () {
		Route::get('/login', [SessionController::class, 'create'])->name('create');
		Route::post('/login', [SessionController::class, 'store'])->name('store');
	});
});


Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);