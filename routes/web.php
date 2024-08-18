<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;



//? --------------------------------select Data--------------------------------------
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
//? ---------------------------------------------------------------------------------

// --------------------------------insert Data--------------------------------------
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
// ---------------------------------------------------------------------------------


//* --------------------------------update Data--------------------------------------
Route::get('/category/edit/{catId}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{catId}', [CategoryController::class, 'update'])->name('category.update');
//* ---------------------------------------------------------------------------------



//! --------------------------------Delete Data--------------------------------------
Route::delete('/category/{catId}', [CategoryController::class, 'destroy'])->name('category.destroy');
//! ---------------------------------------------------------------------------------


