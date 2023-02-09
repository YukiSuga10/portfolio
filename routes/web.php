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
Route::get("/contact", function(){
    return view('contact');
});
Route::post("/contact", [WorkController::class, 'request']);


// worksの表示ルーティング
Route::get("/works/sakeateya", function(){
    return view('worksopen_sakeateya');
});
Route::get("/works/pafu", function(){
    return view('worksopen_pafu');
});
Route::get("/works/hunglymenu", function(){
    return view('worksopen_hunglymenu');
});
Route::get("/works/sugutabe", function(){
    return view('worksopen_sugutabe');
});
Route::get("/works/yazy", function(){
    return view('worksopen_yazy');
});
Route::get("/works/pizza", function(){
    return view('worksopen_pizza');
});
Route::get("/works/banner", function(){
    return view('worksopen_banner');
});


