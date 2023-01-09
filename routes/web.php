<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SetupController;
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

/* Route::get('/', function () {
    return view('FrontEnd\index');
}); */

Route::get('/', [SetupController::class, 'ShowSettingsInFront']);


Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [SetupController::class, 'ShowRegisterPage']);
Route::post('/register', [LoginController::class, 'register']);

Route::group(['middleware' => ['prevent-back-history']], function () {
    Route::get('/login', [LoginController::class, 'ShowLoginPage'])->name('login');
    Route::group(['middleware' => ['auth']], function () {
        Route::post('/site_setting/setup', [SetupController::class, 'save'])->name('setup_post');
        Route::get('/site_setting/setup', [SetupController::class, 'show'])->name('setup');
        Route::get('/admin/users', [AdminController::class, 'show_users_list'])->name('show_users_list');
        Route::get('/admin/users/{verified}/{id}/{session_id}', [AdminController::class, 'user_active'])->name('user_verified');
        Route::get('/logout', [LoginController::class, 'logout']);
        Route::get('/dashboard', function () {
            return view('BackEnd/dashboard');
        })->name('dashboard');
    });
});
