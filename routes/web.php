<?php

use App\Http\Controllers\OrderCategoryAmenitiesController;
use App\Http\Controllers\OrderCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderHeadingsController;
use App\Http\Controllers\SliderHeadingsMenuController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('front.index');
// })->name('front.index');
Route::prefix('/')->name('order.')->group(function () {
Route::post('/create/{id}', [WebController::class, 'order'])->name('create');
Route::post('/store/{id}', [WebController::class, 'orderStore'])->name('store');
});
Route::prefix('/')->name('front.')->group(function () {
    Route::resource('/', WebController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::prefix('product')->group(function () {
        Route::put('/restore/{id}', [ProductController::class, 'restore'])->name('product.restore');
    });
    Route::resource(__('product'), ProductController::class);

    Route::put('order_category/restore/{id}', [OrderCategoryController::class, 'restore'])->name('order_category.restore');

    Route::resource(__('order_category'), OrderCategoryController::class);

    Route::put('order_category_amenities/restore/{id}', [OrderCategoryAmenitiesController::class, 'restore'])->name('order_category_amenities.restore');

    Route::resource(__('order_category_amenities'), OrderCategoryAmenitiesController::class);

    Route::put('slider_heading/restore/{id}', [SliderHeadingsController::class, 'restore'])->name('slider_heading.restore');

    Route::resource(__('slider_heading'), SliderHeadingsController::class);

    Route::prefix('slider_heading_menus')->group(function () {
        Route::put('restore/{id}', [SliderHeadingsMenuController::class, 'restore'])->name('slider_heading_menus.restore');
    });

    Route::resource(__('slider_heading_menus'), SliderHeadingsMenuController::class);
});

require __DIR__ . '/auth.php';
