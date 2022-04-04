<?php
use Modules\Student\Http\Controllers\StudentCOntroller;
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

Route::prefix('student')->name('student.')->group(function() {
    /**
     * StudentController Route 
     */
    Route::get('/', [StudentController::class,'index']);
    route::get('add',[StudentController::class,'add'])->name('add');
    route::post('create',[StudentController::class,'store'])->name('store');
    route::get('manage',[StudentController::class,'manage'])->name('manage');
    route::get('edit/{id}',[StudentController::class,'edit'])->name('edit');
    route::post('update',[StudentController::class,'update'])->name('update');
    route::post('delete',[StudentController::class,'delete'])->name('delete');
    route::get('view/{id}',[StudentController::class,'view'])->name('view');
});
