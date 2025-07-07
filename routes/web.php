<?php

use App\Http\Controllers\Web\SpecialController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\CateringController;
use App\Http\Controllers\Web\CheckoutController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\DineController;
use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\Web\LocationController;
use App\Http\Controllers\Web\MenuController;
use App\Http\Controllers\Web\StoryController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('contact',[ContactController::class,'index'])->name('contact');
Route::get('specials',[SpecialController::class,'index'])->name('specials');
Route::get('catering',[CateringController::class,'index'])->name('catering');
Route::get('dine-in',[DineController::class,'index'])->name('dine');

Route::controller(StoryController::class)->group(function() {
    Route::get('story','index')->name('story');
});
Route::prefix('menu/')->controller(MenuController::class)->middleware('CheckLocation')->name('menu.')->group(function () {
    Route::get('delivery/{branchId}','delivery')->name('delivery');
    Route::post('delivery/{branchId}','delivery');
    Route::get('takeout/{branchId}','takeout')->name('takeout');
    Route::post('takeout/{branchId}','takeout');
});
Route::controller(AboutController::class)->group(function () {
    Route::get('story','index')->name('story');
    Route::get('careers','careers')->name('careers');
    Route::get('gallery','gallery')->name('gallery');
    Route::get('reviews/media','mediaReviews')->name('reviews.media');
    Route::get('reviews/guest','guestReviews')->name('reviews.guest');
});
Route::get('checkout',[CheckoutController::class,'index'])->name('checkout');


Route::controller(AuthController::class)->group(function () {
    Route::get('login','login_view')->name('login')->middleware('guest');
    Route::post('login','login');
    Route::get('logout','logout')->name('logout');
    Route::post('register','register')->name('register')->middleware('guest');
});

Route::post('location',[LocationController::class,'index'])->name('location');
