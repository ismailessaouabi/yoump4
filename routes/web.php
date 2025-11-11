<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Login;
use App\Livewire\Pgs\Accueil;

Route::get('/', Accueil::class)->name('accueil')->middleware('auth');

Route::get('/register', Register::class)->name('register');
Route::post('/register', [Register::class , 'store'])->name('register.post');
Route::get('/login', Login::class)->name('login');
Route::post('/login', [Login::class , 'login'])->name('login.post');

