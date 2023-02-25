<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\item;
use App\Models\item_model;

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


Route::get('/item', [item::class, 'item_main'])->name("item_main");

Route::post('/create_item', [item::class, 'create_item'])->name('create_item');

Route::post('/update/{id}', [item::class, 'update'])->name('update');

Route::get('/view_update/{id}', [item::class, 'view_update'])->name('view_update');

Route::post('/delete_item/{id}', [item::class, 'delete_item'])->name('delete_item');

Route::get('/search', [item::class, 'search'])->name('search');
