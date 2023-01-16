<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
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
    Route::view('/', 'dashboard')->name('homepage');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::prefix('reports')->as('reports.')->group(function () {
        Route::get('out', [ReportController::class, 'out'])->name('out');
        Route::post('out', [ReportController::class, 'saveOut'])->name('out');
        Route::get('in', [ReportController::class, 'in'])->name('in');
        Route::post('in', [ReportController::class, 'saveIn'])->name('in');
    });
});

require __DIR__.'/auth.php';


