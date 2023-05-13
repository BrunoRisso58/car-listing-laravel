<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::prefix('users')->name('user.')
->controller(UserController::class)
->group(function () {
    Route::get('/', 'index')->name('index')->withTrashed();
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{user}', 'edit')->name('edit');
    Route::put('/update/{user}', 'update')->name('update');
    Route::delete('/delete/{user}', 'destroy')->name('delete');
});
