<?php

use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\LunchTimeController;
use App\Http\Controllers\Admin\MenuController as AdminMenuController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SidelineController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Web\SpecialController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\CateringController;
use App\Http\Controllers\Web\CheckoutController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\DineController;
use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\Web\LocationController;
use App\Http\Controllers\Web\MenuController;
use App\Http\Controllers\Web\StoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::get('specials', [SpecialController::class, 'index'])->name('specials');
Route::get('catering', [CateringController::class, 'index'])->name('catering');
Route::get('dine-in', [DineController::class, 'index'])->name('dine');

Route::controller(StoryController::class)->group(function () {
    Route::get('story', 'index')->name('story');
});

Route::get('menu/{type}/{branchId}', [MenuController::class, 'type'])->middleware('CheckLocation')->name('menu.type');
Route::post('menu/{type}/{branchId}', [MenuController::class, 'type']);
Route::get('menu/extra/ingredients/{menuId}', [MenuController::class, 'ingredients'])->name('menu.ingredients');



Route::prefix('cart')->controller(CartController::class)->name('cart.')->group(function () {
    Route::post('store', 'store')->name('store');
    Route::get('flush', 'flush')->name('flush');
    Route::get('/', 'index')->name('index');
    Route::post('unset-ingredient', '')->name('unset.ingredient');
    Route::get('destroy/{id}', 'destroy')->name('destroy');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('story', 'index')->name('story');
    Route::get('careers', 'careers')->name('careers');
    Route::get('gallery', 'gallery')->name('gallery');
    Route::get('reviews/media', 'mediaReviews')->name('reviews.media');
    Route::get('reviews/guest', 'guestReviews')->name('reviews.guest');
});

Route::prefix('checkout')->controller(CheckoutController::class)->name('checkout')->group(function () {
    Route::get('/', 'index');
    Route::post('store', 'store')->name('.store');
});



Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login_view')->name('login')->middleware('guest');
    Route::post('login', 'login');
    Route::get('logout', 'logout')->name('logout');
    Route::post('register', 'register')->name('register')->middleware('guest');
});

Route::post('location', [LocationController::class, 'index'])->name('location');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminIndexController::class, 'index'])->name('index');


    Route::prefix('category')->controller(CategoryController::class)->name('category.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        // Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('branch')->controller(BranchController::class)->name('branch.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        // Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('menus')->controller(AdminMenuController::class)->name('menu.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        // Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('lunchtime')->controller(LunchTimeController::class)->name('lunchtime.')->group(function () {
        Route::get('/','index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        // Route::get('destroy/{id}','destroy')->name('destroy');
    });

    Route::prefix('users')->controller(UserController::class)->name('user.')->group(function () {
        Route::get('/', 'index')->name('index');
    });

    Route::prefix('orders')->controller(OrderController::class)->name('orders.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('details/{id}','details')->name('details');
    });

    Route::prefix('sideline')->controller(SidelineController::class)->name('sideline.')->group(function () {
        Route::get('/','index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
    });
});
