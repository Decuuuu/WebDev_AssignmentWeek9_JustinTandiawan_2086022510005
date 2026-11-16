<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;

Route::get('/', [ProfileController::class, 'index']);
Route::get('/about', [SkillController::class, 'index']);
Route::get('/blog', [ProjectController::class, 'index']);

Route::get('/contact', function () {
    return view('contact');
});