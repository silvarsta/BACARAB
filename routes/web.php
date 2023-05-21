<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\gameAngkaController;
use App\Http\Controllers\gameHurufController;
use App\Http\Controllers\gameKataController;

use App\Http\Controllers\KamusController;
use App\Http\Controllers\PrintableController;

use App\Http\Controllers\landingController;
use App\Http\Controllers\mainpageController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::get('/', [landingController::class, 'landing']);

Route::get('/main', [mainpageController::class, 'main'])->name('main')->middleware('auth', 'role:user');
Route::get('/profile', [mainpageController::class, 'profile'])->name('profile');
Route::post('/main', [mainpageController::class, 'createContact'])->name('main.store');


Route::get('/loginreg', [SessionController::class, 'loginreg'])->name('loginreg');
Route::post('/postlogin', [SessionController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [SessionController::class, 'logout'])->name('logout');


Route::get('/gameHuruf', [gameHurufController::class, 'gameHuruf']);
Route::get('/bermainGameHuruf', function () {return view('gameHurufInner');});
Route::get('/gameAngka', [gameAngkaController::class, 'gameAngka']);
Route::get('/bermainGameAngka', function () {return view('gameAngkaInner');});
Route::get('/gameKata', [gameKataController::class, 'gameKata']);
Route::get('/bermainGameKata', function () {return view('gameKataInner');});



Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth', 'role:admin');
Route::get('/admin/account', [AdminController::class, 'account'])->name('admin.account');

Route::get('/admin/kamus', [KamusController::class, 'dictionary'])
    ->name('admin.dictionary');
Route::get('/kamus/create', [KamusController::class, 'createKamus'])
    ->name('admin.createKms');
Route::post('/admin/kamus', [KamusController::class, 'storeKamus'])
    ->name('admin.storeKamus');
Route::get('/kamus/{kamus}/edit', [KamusController::class, 'editKamus'])
    ->name('admin.editKms');
// Route::get('/kamus/{kamus}', [KamusController::class, 'showKamus'])
//     ->name('admin.showKamus');
Route::patch('/kamus/{kamus}', [KamusController::class, 'updateKamus'])
    ->name('admin.updateKamus');
Route::delete('/kamus/{kamus}', [KamusController::class, 'destroyKamus'])
    ->name('admin.destroyKamus');


Route::get('/admin/printable', [PrintableController::class, 'printable'])
    ->name('admin.printable');
Route::get('/printable/create', [PrintableController::class, 'createPrintable'])
    ->name('admin.createPrint');
Route::post('/admin/printable', [PrintableController::class, 'storePrintable'])
    ->name('admin.storePrint');
Route::get('/printable/{printable}/edit', [PrintableController::class, 'editPrintable'])
    ->name('admin.editPrint');
Route::patch('/printable/{printable}', [PrintableController::class, 'updatePrintable'])
    ->name('admin.updatePrint');
Route::delete('/printable/{printable}', [PrintableController::class, 'destroyPrintable'])
    ->name('admin.destroyPrint');

Route::get('admin/question', [QuestionController::class, 'question'])->name('admin.question');
