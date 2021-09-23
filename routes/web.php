<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendControllers\BandsController;
use App\Http\Controllers\FrontendControllers\VideosController;
use App\Http\Controllers\FrontendControllers\ShowsController;

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

Route::get('/', [BandsController::class, 'index'])->name('bands');

Route::get('/videosPage', [VideosController::class, 'index'])->name('videosPage');

Route::get('/showsPage', [ShowsController::class, 'index'])->name('showsPage');

// Route::get('/band', [BandsController::class, 'index'])->name('bandsBand');

require __DIR__.'/auth.php';

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
