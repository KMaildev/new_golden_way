<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\OverseasJobsController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::get('organization', [OrganizationController::class, 'index'])->name('organization.index');
Route::get('team', [TeamController::class, 'index'])->name('team.index');
Route::get('partners', [PartnersController::class, 'index'])->name('partners.index');

Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitiesController::class);
Route::resource('cv', CvController::class);
Route::resource('cv', CvController::class);
Route::resource('employer', EmployerController::class);
Route::resource('recruitment', RecruitmentController::class);
Route::resource('overseas_jobs', OverseasJobsController::class);

// Language
Route::get('set_eng', [LangController::class, 'lang_eng'])->name('set_eng');
Route::get('set_jp', [LangController::class, 'lang_jp'])->name('set_jp');
