<?php

use App\Http\Controllers\NotesController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('notes.index');
    }
    return view('welcome');
})->name('home');




/**
 * Guest Routes
 */
Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});




/**
 * Authenticated Routes
 */
Route::middleware('auth')->group(function () {

    /**
     * Logout Routes
     */
    Route::delete('/logout', [SessionController::class, 'destroy'])->name('logout');

    /**
     * Pin - Unpin Note Routes
     */
    Route::post('/notes/{note}/pin', [NotesController::class, 'pin'])->name('notes.pin');
    Route::post('/notes/{note}/unpin', [NotesController::class, 'unpin'])->name('notes.unpin');

    /**
     * Note Resource Routes
     */
    Route::get('/notes', [NotesController::class, 'index'])->name('notes.index');
    Route::get('/notes/create', [NotesController::class, 'create'])->name('notes.create');
    Route::post('/notes', [NotesController::class, 'store'])->name('notes.store');
    Route::get('/notes/show/{note}', [NotesController::class, 'show'])->name('notes.show');
    Route::get('/notes/{note}/edit', [NotesController::class, 'edit'])->name('notes.edit');
    Route::patch('/notes/{note}', [NotesController::class, 'update'])->name('notes.update');
    Route::delete('/notes/{note}', [NotesController::class, 'destroy'])->name('notes.destroy');


});

