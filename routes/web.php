<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TokoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\TokoController::class, 'index']); 
Route::get('/toko', [App\Http\Controllers\TokoController::class, 'index']); 

Route::group(['middleware' => ['auth']], function(){
    // produk
    Route::get('/admin', 
    [AdminController::class,'index']);
    Route::get('/product', [AdminProController::class,'index']);
    Route::get('/product/create', [AdminProController::class, 'create']);
    Route::post('/product', [AdminProController::class, 'store']);
    Route::get('/product/edit/{id}', [AdminProController::class, 'edit']);
    Route::put('/product/{id}', [AdminProController::class, 'update']);
    Route::delete('/product', [AdminProController::class, 'destroy']);
    // user
    Route::get('/users', [UserController::class,'index']);
    Route::get('/users/create', [UserController::class, 'create']);
    Route::post('/users', [UserController::class, 'store']);
    Route::get('/users/edit/{id}', [UserController::class, 'edit']);
    Route::put('/users/{id}', [UserController::class, 'update']);
    Route::delete('/users', [UserController::class, 'destroy']);
});
    
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('customer/{id}', [App\Http\Controllers\CustomerController::class, 'index']);




