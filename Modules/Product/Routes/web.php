<?php
use Modules\Product\Http\Controllers\ProductController;
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

Route::prefix('product')->name('product.')->group(function() {
   route::get('/manage', [ProductController::class, 'manage'])->name('manage');
   route::get('/add', [ProductController::class, 'add'])->name('add');
   route::post('/store', [ProductController::class, 'store'])->name('store');
   route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
   route::post('/update', [ProductController::class, 'update'])->name('update');
   route::post('/delete', [ProductController::class, 'delete'])->name('delete');
});
