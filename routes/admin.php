<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\DashController;
use Illuminate\Support\Facades\Route;

Route::get('index', [DashController::class, 'index'])->name('dash-index');
Route::resource('banner', BannerController::class);

Route::get('general', [DashController::class, 'general'])->name('dash-general');
Route::get('hospital', [DashController::class, 'hospital'])->name('dash-hospital');
Route::get('music', [DashController::class, 'music'])->name('dash-music');
Route::get('crm', [DashController::class, 'crm'])->name('dash-crm');
Route::get('socialmedia', [DashController::class, 'socialmedia'])->name('dash-socialmedia');
Route::get('freelancing', [DashController::class, 'freelancing'])->name('dash-freelancing');
Route::get('university', [DashController::class, 'university'])->name('dash-university');
Route::get('ecommerce', [DashController::class, 'ecommerce'])->name('dash-ecommerce');
Route::get('blog', [DashController::class, 'blog'])->name('dash-blog');
