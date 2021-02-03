<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AppAdminController;

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

Route::get('/', [HomeController::class,"index"])->name('application.home');

Route::get('admin/cadastro', [AppAdminController::class,"register"])->name('admin.register');

Route::post('admin/do_cadastro', [AppAdminController::class,"doRegister"])->name('admin.do-register');

Route::get('admin/management', [AppAdminController::class,"management"])->name('admin.content');




