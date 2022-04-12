<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StepOneController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.master-landing');
})->name('main');

Auth::routes();
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/businessplan/{id?}');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::get('/home', [App\Http\Controllers\StepOneController::class, 'index'])->name('home');
Route::resource('/businessplan',StepOneController::class);
Route::get('/download',[StepOneController::class,'download'])->name('download');
Route::get('/d',[StepOneController::class,'download'])->name('download');
Route::get('/business_plan_view',[StepOneController::class,'business_plan_view'])->name('business_plan_view');
Route::get('/b',[StepOneController::class,'business_plan_view1'])->name('business_plan_view1');
Route::get('/businessplan/pdf',[StepOneController::class,'createPDF'])->name('downloadpdf');
Route::get('/business_plan_preview',[StepOneController::class,'Business_plan_preview'])->name('business_plan_preview');

Route::resource('/car' , CarController::class);
