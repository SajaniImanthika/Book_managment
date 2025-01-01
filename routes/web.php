<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;


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

Route::get('/home', [MyController::class,"index"])->name("home");

Route::get('/create', [MyController::class,"create"])->name("create");

Route::post('/book/store', [MyController::class,"store"])->name("book.store");

Route::get('/book/{id}', [MyController::class,"show"])->name("book.show");

Route::get('/book/{id}/edit', [MyController::class,"edit"])->name("book.edit");

Route::put('/book/{id}', [MyController::class,"update"])->name("book.update");

Route::delete('/book/{id}', [MyController::class,"destroy"])->name("book.destroy");

