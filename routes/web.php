<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;

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
    return view('home', [
        'title' => 'Beranda'
    ]);
});

Route::get('/toko', [TokoController::class, 'index'])->name('toko.index');
Route::post('/toko', [TokoController::class, 'sort'])->name('toko.sort');
Route::post('/login', function() {return view('login');});
