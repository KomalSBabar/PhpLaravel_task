<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

        Route::middleware([
            'auth:sanctum',
            config('jetstream.auth_session'),
            'verified',
        ])->group(function () {
            
    // Route::get('/dashboard', function () {
    //     return Inertia::render('Dashboard');
    // })->name('dashboard');

    Route::get('dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('productlist',[ProductController::class,'index'])->name('product.index');
    Route::get('createproduct',[ProductController::class,'create'])->name('product.create');
    Route::post('storeproduct',[ProductController::class,'store'])->name('product_store');
    
    Route::get('edit/{product_id}',[ProductController::class,'edit_pro'])->name('product.edit');
    Route::post('update/{post_id}',[ProductController::class,'update_pro'])->name('product.update');
   Route::get('product/{product_id}',[ProductController::class,'show'])->name('product.show');
    







});
