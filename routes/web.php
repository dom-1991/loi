<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth')->group(function () {
    Route::get('/', [ReportController::class, 'today'])->name('homepage');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::prefix('reports')->as('reports.')->group(function () {
        Route::get('out', [ReportController::class, 'out'])->name('out');
        Route::post('out', [ReportController::class, 'saveOut'])->name('out');
        Route::get('in', [ReportController::class, 'in'])->name('in');
        Route::post('in', [ReportController::class, 'saveIn'])->name('in');
        Route::get('', [ReportController::class, 'index'])->name('index');
    });
    Route::prefix('users')->as('users.')->group(function () {
        Route::get('', [UserController::class, 'index'])->name('index');
    });
});

require __DIR__.'/auth.php';


