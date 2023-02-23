<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\item;

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


Route::get("/item", [item::class, "item_main"])->name("item");

Route::get("/create_item", [item::class, "create_item"])->name("create_item");
