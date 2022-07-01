<?php

use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::resource('posts', PostController::class);
Route::get('/', [HomeController::class, 'index'])->name('home');
// Un groupe de route encapsyller par un middleware
Route::middleware(['auth'])->group(function () {

    Route::middleware(['role:admin'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });

    Route::middleware([
        'admin'
    ])->name('admin.')->prefix('admin')->group(function () {
        Route::resource('posts', AdminPostController::class);
    });
});
require __DIR__ . '/auth.php';
