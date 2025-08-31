<?php

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home-one', [FrontEndController::class, 'homeOne'])->name('home-one');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/', [FrontEndController::class, 'index'])->name('home');
Route::get('/custom-development', [FrontEndController::class, 'cust_devel'])->name('custom-development');
Route::get('/ai-ml', [FrontEndController::class, 'ai_ml'])->name('ai_ml');
Route::get('/dynamic-solution', [FrontEndController::class, 'dynamic'])->name('dynamic');
Route::get('/about-us', [FrontEndController::class, 'about_us'])->name('about-us');
Route::get('/service', [FrontEndController::class, 'services'])->name('services');
Route::get('/service-details', [FrontEndController::class, 'service_details'])->name('service-details');
Route::get('/case-study', [FrontEndController::class, 'case_study'])->name('case-study');
Route::get('/case-study-details', [FrontEndController::class, 'case_study_details'])->name('case-study-details');
Route::get('/blog', [FrontEndController::class, 'blog'])->name('blog');
Route::get('/blog-details/{blog_slug}', [FrontEndController::class, 'blog_show'])->name('blog-details');
Route::get('/case-study/{slug?}', [FrontEndController::class, 'case_study_detail'])->name('case_study_detail');
Route::get('/contact-us', [FrontEndController::class, 'contact_us'])->name('contact');
Route::post('/contact-store', [FrontEndController::class, 'contact_store'])->name('contact.store');
Route::get('terms-condition/{slug}', [FrontEndController::class, 'terms_condition'])->name('terms_condition');
