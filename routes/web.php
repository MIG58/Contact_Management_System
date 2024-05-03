<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/contact/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contact/create', [ContactController::class, 'store'])->name('contacts.store');

Route::get('/contact/{id}', [ContactController::class, 'show'])->name('contacts.show');

Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contacts.update');

Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');