<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/login.php', function () {
    return view('login');
});
Route::get('/about.php', function () {
    return view('about');
});
Route::get('/contact.php', function () {
    return view('contact');
});
Route::get('/service.php', function () {
    return view('service');
});


Route::post('/login', function(){
    return 'welcome';
});
