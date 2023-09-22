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

Route::get('list5', function () {
    return view('list5');
})->name('list5');

Route::get('list6', function () {
    return view('list6');
})->name('list6');

Route::get('list7', function () {
    return view('list7');
})->name('list7');

Route::get('list8', function () {
    return view('list8');
})->name('list8');

Route::get('list9', function () {
    return view('list9');
})->name('list9');

Route::get('list10', function () {
    return view('list10');
})->name('list10');
