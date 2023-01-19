<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
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

Route::get('/', [Controller::class, 'home']
)->name('home_route');

Route::get('/show-product', [Controller::class, 'showProduct']
)->name('show_product_route');

Route::get('/view-product-detail/{id}', [Controller::class, 'viewProductDetail']
)->name('view-product-detail_route');

Route::get('/login', [AuthController::class, 'login_page']
)->name('login_route');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']
)->name('logout_route');

Route::get('/register', [AuthController::class, 'register_page']
)->name('register_route');

Route::post('/register', [AuthController::class, 'register']);