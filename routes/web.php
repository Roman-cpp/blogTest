<?php

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
})->name('list1');

Route::get('/list2', function () {
    return view('list2');
})->name('list2');

Route::get('/list3', function () {
    return view('list3');
})->name('list3');

Route::get('list4', function () {
    return view('list4');
})->name('list4');
