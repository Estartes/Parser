<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'mainView'])->name('main');
Route::get('/serials/page/{num}', [MainController::class, 'serialsPageView'])->name('serialsPage');
Route::get('/serials', [MainController::class, 'serialsView'])->name('serials');
Route::get('/movies/page/{num}', [MainController::class, 'pageView'])->name('page');
Route::get('movie/card/{item}', [MainController::class, 'cardView'])->name('card');
Route::get('serial/card/{item}', [MainController::class, 'cardSerialView'])->name('serialsView');
