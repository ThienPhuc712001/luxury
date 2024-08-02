<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartmentController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('apartments', ApartmentController::class);
