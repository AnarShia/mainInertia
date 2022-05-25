<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('HomePage',[
        'title' => 'Home',
        'message' => 'Welcome to Inertia!',
        'name'=>'ÇağrıKaraca',
        
    ]);
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/companies', function () {
    return Inertia::render('HomePage');
})->middleware(['auth', 'verified'])->name('companies');

require __DIR__.'/auth.php';
