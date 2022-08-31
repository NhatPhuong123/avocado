<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/product-detail/{productId}', [HomeController::class, 'productDetail'])->name('product.detail');

Route::get('/category/{id}', [HomeController::class, 'categoryDetail'])->name('category.detail');
Route::get('/product-search', [HomeController::class, 'productSearch'])->name('product.search');


/**
 * Admin
 */

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [DashBoardController::class, 'index'])->name('admin.dashboard');

    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('admin.categories.store');

    Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('admin.categories.show');
   
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
});





