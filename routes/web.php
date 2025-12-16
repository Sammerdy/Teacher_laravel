<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

Route::resource('staffs', TeacherController::class);


Route::get('/', function () {
    return view('welcome');
});
