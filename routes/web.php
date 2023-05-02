<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\UserDetailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('user-detail', [UserDetailController::class,'index'])->name('user-detail.index')->middleware('auth');
Route::get('user-detail/create', [UserDetailController::class,'create'])->name('user-detail.create')->middleware('auth');
Route::post('user-detail', [UserDetailController::class,'store'])->middleware('auth');
Route::get('user-detail/{id}', [UserDetailController::class,'edit'])->name('user-detail.edit')->middleware('auth');
Route::put('user-detail/{id}', [UserDetailController::class,'update'])->name('user-detail.update')->middleware('auth');
Route::delete('user-detail/{id}', [UserDetailController::class,'destroy'])->name('user-detail.destroy')->middleware('auth');
Route::get('education/create', [EducationController::class,'create'])->name('education.create')->middleware('auth');
Route::post('education', [EducationController::class,'store'])->middleware('auth');
Route::get('list-education', [EducationController::class,'index'])->name('education.index')->middleware('auth');
Route::get('edit-education/{education}', [EducationController::class,'edit'])->name('education.edit')->middleware('auth');
Route::put('education/{education}', [EducationController::class,'update'])->name('education.update')->middleware('auth');
Route::delete('delete-education/{education}', [EducationController::class,'destroy'])->name('education.destroy')->middleware('auth');
Route::resource('experiences', ExperienceController::class)->middleware('auth');
Route::resource('skills', SkillController::class)->middleware('auth');
Route::get('/resume', [ResourceController::class, 'index'])->name('resume.index')->middleware('auth');
Route::get('/resume/download', [ResourceController::class, 'download'])->name('resume.download')->middleware('auth');


