<?php

use App\Http\Controllers\AlutsistaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\MunisiController;
use App\Http\Controllers\SenjataController;
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

Route::get('/', [GuestController::class, 'dashboard'])
    ->name('dashboard');

/* ControllerAlutsista */
Route::get('/user/index', [AlutsistaController::class, 'index'])
    ->name('user.index')->middleware('login_auth');
Route::get('/user/about', [AlutsistaController::class, 'about'])
    ->name('user.about')->middleware('login_auth');
Route::get('/user/gallery', [AlutsistaController::class, 'gallery'])
    ->name('user.gallery')->middleware('login_auth');
Route::get('/user/berita', [AlutsistaController::class, 'berita'])
    ->name('user.berita')->middleware('login_auth');
Route::get('/user/kontak', [AlutsistaController::class, 'kontak'])
    ->name('user.kontak')->middleware('login_auth');

/* AuthController */
Route::get('/auth', [AuthController::class, 'index'])
    ->name('auth.signin');
Route::get('/auth/signin', [AuthController::class, 'signin'])
    ->name('auth.signin');
Route::get('/auth/signup', [AuthController::class, 'signup'])
    ->name('auth.signup');
Route::post('/auth/signup', [AuthController::class, 'insert'])
    ->name('auth.insert');
Route::get('/auth', [AuthController::class, 'signin'])
    ->name('auth.signin');
Route::get('/auth/signin', [AuthController::class, 'signin'])
    ->name('auth.signin');
Route::get('/auth', [AuthController::class, 'logout'])
    ->name('auth.signout');
Route::post('/auth', [AuthController::class, 'process'])
    ->name('auth.process');

/* SenjataController */
Route::get('/senjata', [SenjataController::class, 'index'])
    ->name('user.senjata.senjata');

/* MunisiController */
Route::get('/munisi', [MunisiController::class, 'index'])
    ->name('user.munisi.munisi');


/* GuestController */
/* Route::get('/auth/signin', [AuthController::class, 'signin'])
    ->name('auth.signin'); */
