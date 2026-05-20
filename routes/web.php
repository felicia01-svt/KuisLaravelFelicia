<?php
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/fakultas', FakultasController::class);
Route::resource('/prodi', ProdiController::class);
// Route::get('/fakultas', function () {
//     return view('fakultas.list-fakultas');
// });

// Route::get('/edit', function () {
//     return view('fakultas.edit-fakultas');
// });

// Route::get('/detail', function () {
//     return view('fakultas.detail-fakultas');
// });

// Route::get('/add', function () {
//     return view('fakultas.add-fakultas');
// });