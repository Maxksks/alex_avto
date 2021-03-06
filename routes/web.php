<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\MainController;
Route::get('/', [MainController::class, 'index'])->name('home');

Auth::routes();

Route::get('/main', [App\Http\Controllers\HomeController::class, 'index'])->name('main');

Route::get('/store', [App\Http\Controllers\StoreController::class, 'index'])->name('store');

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');

Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('order');

Route::get('/wish', [App\Http\Controllers\WhishController::class, 'index'])->name('wish');

Route::get('/pay', [App\Http\Controllers\PayController::class, 'index'])->name('pay');

Route::get('/cabinet', [App\Http\Controllers\CabinetController::class, 'index'])->name('cabinet');

Route::middleware('role:admin')->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('HomeAdmin');

    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);

    Route::get('/product/create/{prod}/attributes', [App\Http\Controllers\admin\AttributeController::class, 'index'])
        ->name('attribute_add');
    Route::post('/product/create/{prod}/attributes', [App\Http\Controllers\admin\AttributeController::class, 'add'])
        ->name('attributes');
});
