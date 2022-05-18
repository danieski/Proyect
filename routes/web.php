<?php
//Hello test
//Hello from Widnwos
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrivateController;
use App\Http\Controllers\PosteController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/private', [App\Http\Controllers\PrivateController::class, 'index'])->name('home');
Route::get('/delete/{id}', [App\Http\Controllers\PrivateController::class, 'delete'])->name('home');
Route::post('/', [App\Http\Controllers\PostController::class, 'store'])->name('home');
Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('home');


//Route::get('/demo', [App\Http\Controllers\PostController::class, 'index']);