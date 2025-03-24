<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('students/admit-card/all', [StudentController::class, 'admitCardAll'])->name('students.admit-card.all');
Route::get('students/admit-card/{id}', [StudentController::class, 'admitCard'])->name('students.admit-card');
Route::resource('students', StudentController::class);
