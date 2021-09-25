<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendControllers\BandsController;
use App\Http\Controllers\FrontendControllers\VideosController;
use App\Http\Controllers\FrontendControllers\ShowsController;
use App\Http\Controllers\FrontendControllers\ContactsController;
use App\Http\Controllers\FrontendControllers\SponsorsController;
use App\Http\Controllers\FrontendControllers\AlbumsController;
use App\Http\Controllers\FrontendControllers\SignaturesController;

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

Route::get('/contactsPage', [ContactsController::class, 'index'])->name('contactsPage');

Route::get('/sponsorsPage', [SponsorsController::class, 'index'])->name('sponsorsPage');

Route::get('/albumsPage', [AlbumsController::class, 'index'])->name('albumsPage');
Route::get('/albumPage/{id}', [AlbumsController::class, 'getAlbum'])->name('albumsPage.getAlbum');

Route::get('/guestBookPage', [SignaturesController::class, 'index'])->name('signaturesPage');
Route::post('validate-g-recaptcha', [SignaturesController::class, 'validateGCaptch']);

require __DIR__.'/auth.php';

Auth::routes();

