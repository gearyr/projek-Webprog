<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/register', [AuthController::class, 'viewRegister']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'viewLogin']);
Route::post('/authenticate', [AuthController::class, 'authenticate']);
Route::get('/home', [AuthController::class, 'viewHome']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/addmovie',[MovieController::class, 'addMovie']);

Route::get('/guest',[AuthController::class, 'viewGuest']);
Route::get('/user',[AuthController::class, 'viewUser'])->middleware('only_user');
Route::get('/admin',[AuthController::class, 'viewAdmin'])->middleware('only_admin');

