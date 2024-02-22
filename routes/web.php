<?php

use App\Models\users;

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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::resource('users', UserController::class);


 Route::get('/', function () {
    return view('index');
});
Route::get('/create', [UserController::class,'create'])->name('create');
Route::get('/service', [UserController::class,'service'])->name('service');
Route::get('/index', [UserController::class,'index'])->name('index');
Route::get('/contact', [UserController::class,'contact'])->name('contact');
Route::get('/about', [UserController::class,'about'])->name('about');

Route::get('/user/login', [UserController::class,'sign'])->name('login');
Route::post('/user/signin', [UserController::class,'signin'])->name('signin');
Route::post('/login', function(){
    return 'welcome';
});



Route::post('/logout', [UserController::class, 'logout']);
Route::post('/singin', [UserController::class, 'signin']);
