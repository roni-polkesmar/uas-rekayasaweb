<?php

use App\Http\Controllers\ApiAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::post('/register', [ApiAuthController::class, 'register']);
Route::post('/login', [ApiAuthController::class, 'login']);


Route::prefix('/mahasiswa')->group(function() {
    Route::post('/create', function() {
        return response('create mahasiswa');
    });

    Route::get('/read/{nim}', function($nim) {
        return response('read mahasiswa nim: ' . $nim);
    });

    Route::put('/update/{nim}', function($nim) {
        return response('update mahasiswa');
    });

    Route::delete('/delete/{nim}', function($nim) {
        return response('delete mahasiswa');
    });
});