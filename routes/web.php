<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/work-experiences', [PortfolioController::class, 'workExperience'])->name('work.experiences');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/projects/{id}', [PortfolioController::class, 'projectShow'])->name('project.show');
Route::get('/blogs', [PortfolioController::class, 'blogs'])->name('blogs');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');


