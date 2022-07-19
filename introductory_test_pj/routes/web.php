<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;



Route::post('/todo/store', [TestController::class, 'store']);
Route::post('/todo/update', [TestController::class, 'update']);
Route::post('/todo/delete', [TestController::class, 'delete']);
Route::get('/', [TestController::class, 'index']);

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

