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

    $hello = "Welcome to Laravel page";

    return view('homepage', compact('hello'));
});

Route::get('/page1', function () {

    $welcome = "Welcome to page 1";

    return view('page1', compact('welcome'));
})->name('pageone');


Route::get('/page2', function () {

    $hi = "Welcome to page 2";
    return view('page2', compact('hi'));
})->name('pagetwo');
