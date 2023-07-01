<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppController;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    if (auth()->user()) return view('dashboard');
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login')->name('login');
    Route::post('/register', 'register')->name('register');
});

Route::group(['middleware' => 'auth'], function () {
    // Route::get('/dashboard', [DashboardController::class, 'index']);
    // Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });

    Route::controller(AppController::class)
        ->prefix('{collection}')
        ->name(request()->segment(1) . '.')
        ->group(function () {
            Route::get('/', 'list')->name('list');
            Route::get('/create', 'create')->name('create');
        });
});
