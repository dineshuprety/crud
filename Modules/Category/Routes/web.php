<?php
use Modules\Category\Http\Controllers\CategoryController;
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

Route::prefix('category')->name('category.')->group(function() {
   
    route::get('/',[CategoryController::class,'index'])->name('index');
    route::get('/add',[CategoryController::class,'add'])->name('add');
    route::post('/store',[CategoryController::class,'store'])->name('store');
    route::get('/edit/{id}',[CategoryController::class,'edit'])->name('edit');
    route::post('/update',[CategoryController::class,'update'])->name('update');
    route::post('/delete',[CategoryController::class,'delete'])->name('delete');
    
});
