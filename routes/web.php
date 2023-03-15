<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/hello/', function () {
    return view('hello');
});

Route::get('/about/', function () {
    return view('about');
});

Route::group(['prefix' => 'category', 'as' => 'category'], function () {
    Route::get('/', [CategoryController::class, 'show'])
        ->name('.show');
    Route::get('/{category}', [CategoryController::class, 'showByCategory'])
        ->where('category', '^[A-Za-z]+$')
        ->name('.current');
}
);

Route::get('/news/', [NewsController::class, 'show'])
    ->name('news.show');

Route::get('/news/{id}', [NewsController::class, 'getNewsById'])
    ->where('id', '\d+')
    ->name('news.current');


