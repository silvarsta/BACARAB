<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\gameAngkaController;
use App\Http\Controllers\gameHurufController;
use App\Http\Controllers\gameKataController;

use App\Http\Controllers\KamusController;

use App\Http\Controllers\landingController;
use App\Http\Controllers\mainpageController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::get('/', [landingController::class, 'landing']);
Route::get('/main', [mainpageController::class, 'main'])->name('main');
Route::get('/gameHuruf', [gameHurufController::class, 'gameHuruf']);
Route::get('/gameAngka', [gameAngkaController::class, 'gameAngka']);

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/account', [AdminController::class, 'account']);

Route::get('/admin/about', [AdminController::class, 'about']);
Route::get('/admin/victor', [AdminController::class, 'victor']);

Route::get('/loginreg', [SessionController::class, 'loginreg'])->name('loginreg');

Route::post('/postlogin', [SessionController::class, 'postlogin'])->name('postlogin');

Route::get('/logout', [SessionController::class, 'logout'])->name('logout');



Route::get('/admin/kamus', [KamusController::class, 'dictionary'])
    ->name('admin.dictionary');

Route::get('/kamus/create', [KamusController::class, 'create'])
    ->name('admin.create');

Route::post('/admin/kamus', [KamusController::class, 'store'])
    ->name('admin.store');

Route::get('/kamus/{kamus}/edit', [KamusController::class, 'edit'])
    ->name('admin.edit');

Route::get('/kamus/{kamus}', [KamusController::class, 'show'])
    ->name('admin.show');

Route::patch('/kamus/{kamus}', [KamusController::class, 'update'])
    ->name('admin.update');

Route::delete('/kamus/{kamus}', [KamusController::class, 'destroy'])
    ->name('admin.destroy');

Route::get('/gameKata', [KamusController::class, 'gameKata']);


