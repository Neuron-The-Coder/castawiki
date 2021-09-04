<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCont;

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
    return view('home');
})->name("mainmenu");

Route::get('/product', [ProductCont::class, "getAllProduct"])->name("productpage");
Route::get('/product/{product}', [ProductCont::class, "getSpecificProduct"]);
Route::post('/product', [ProductCont::class, "getSearchedProduct"]);