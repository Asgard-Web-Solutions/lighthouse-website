<?php

use App\Http\Controllers\AdminControlPanelController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('acp', [AdminControlPanelController::class, 'index'])->name('acp')->middleware('auth');
Route::get('acp/users', [AdminControlPanelController::class, 'users'])->name('acp.users')->middleware('auth');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
