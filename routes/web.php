<?php

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

use App\Http\Controllers\WorkController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/works', function () {
    return view('works');
});

Route::get('/works/1', [WorkController::class, 'show_detail']);
Route::get('/works/2', [WorkController::class, 'show_detail']);
Route::get('/works/3', [WorkController::class, 'show_detail']);
Route::get('/works/4', [WorkController::class, 'show_detail']);
Route::get('/works/5', [WorkController::class, 'show_detail']);
Route::get('/works/6', [WorkController::class, 'show_detail']);
Route::get('/works/7', [WorkController::class, 'show_detail']);


