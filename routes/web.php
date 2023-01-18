<?php

use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('home');
})->name('home_route');

Route::get('/show-product', [Controller::class, 'showProduct']
)->name('show_product_route');

Route::get('/login', [Controller::class, 'login']
)->name('login_route');

Route::get('/register', [Controller::class, 'login']
)->name('register_route');