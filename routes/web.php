<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/work', function () {
//     return view('work');
// })->name('work');

// Route::middleware(['auth:sanctum', 'verified'])->get('/skill', function () {
//     return view('skill');
// })->name('skill');

// Route::middleware(['auth:sanctum', 'verified'])->get('/contact', function () {
//     return view('contact');
// })->name('contact');

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about', function () {
    return view('about');
});