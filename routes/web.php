<?php

use App\Http\Controllers\RevenueController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->name('finance.')->prefix('finance')->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.finance.dashboard');
    })->name('dashboard');
    Route::resource('/revenue', RevenueController::class);
});

// Route::middleware(['auth', 'role:admin'])->name('admin')->prefix('admin')->group(function () {
// });

// Route::middleware(['auth', 'role:finance'])->name('finance')->group(function () {
//     Route::resource('/')
// });



require __DIR__ . '/auth.php';
