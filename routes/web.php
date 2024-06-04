<?php

use App\Http\Controllers\facebookcontroller;
use App\Http\Controllers\googlecontroller;
use App\Models\users;
use Illuminate\Routing\Controller;

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
use App\Http\Controllers\postsController;

use function Termwind\render;

Route::resource('users', UserController::class);

Route::get('/', function () {
    return view('index');
});
Route::get('/create', [UserController::class,'create'])->name('create');
Route::get('/service', [UserController::class,'service'])->name('service');
Route::get('/index', [UserController::class,'index'])->name('index');
Route::get('/contact', [UserController::class,'contact'])->name('contact');
Route::get('/about', [UserController::class,'about'])->name('about');

Route::get('/login', [UserController::class,'sign'])->name('sign');
Route::post('/login', [UserController::class,'sign'])->name('login');
Route::post('/register', [UserController::class,'store'])->name('register');

Route::post('/user/signin', [UserController::class,'signin'])->name('signin');
Route::post('/contact', [UserController::class,'contact'])->name('contact');



Route::post('/logout', [UserController::class, 'logout']);
Route::post('/singin', [UserController::class, 'signin']);


//facebook login
route::get('auth/facebook',[facebookcontroller::class,'facebookpage']);
route::get('auth/facebook/callback',[facebookcontroller::class,'facebookredirect']);

//google login
route::get('auth/google',[googlecontroller::class,'redirect'])->name('googleauth');
route::get('auth/google/callback',[googlecontroller::class,'callbackgoogle']);

//contact_us routes
Route::post('/user/contact_us', [UserController::class, 'store'])->name('contact_us');
