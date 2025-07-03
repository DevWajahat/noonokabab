<?php

use App\Http\Controllers\Web\SpecialController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\CateringController;
use App\Http\Controllers\Web\CheckoutController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\DineController;
use App\Http\Controllers\Web\IndexController;
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
Route::prefix('menu/')->controller(MenuController::class)->name('menu.')->group(function () {
    Route::get('delivery','delivery')->name('delivery');
    Route::get('takeout','takeout')->name('takeout');
});
Route::controller(AboutController::class)->group(function () {
    Route::get('story','index')->name('story');
    Route::get('careers','careers')->name('careers');
    Route::get('gallery','gallery')->name('gallery');
    Route::get('reviews/media','mediaReviews')->name('reviews.media');
    Route::get('reviews/guest','guestReviews')->name('reviews.guest');
});
Route::get('checkout',[CheckoutController::class,'index'])->name('checkout');


Route::get('login',[AuthController::class,'login'])->name('login');
