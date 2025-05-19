<?php

use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::get('/resume', [ResumeController::class, 'show'])->name('resume');
Route::get('/resume/print', [ResumeController::class, 'print'])->name('print-resume');
