<?php

use App\Http\Controllers\BirthdayController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;


Route::prefix('/contact')->middleware(['auth'])->group(function (){
    Route::get('/latest',[ContactController::class,'index'])->name('contact.index');
    Route::get('/create',[ContactController::class,'create'])->name('contact.create');
    Route::post('/store',[ContactController::class,'store'])->name('contact.store');
    Route::get('/{contact}',[ContactController::class,'show'])->name('contact.show');
    Route::get('/edit/{contact}',[ContactController::class,'edit'])->name('contact.edit');
    Route::patch('/update/{contact}',[ContactController::class,'update'])->name('contact.update');
    Route::delete('/delete/{contact}',[ContactController::class,'destroy'])->name('contact.delete');
});

Route::middleware(['auth'])->group(function (){
    Route::get('birthday',[BirthdayController::class,'index'])->name('birthday');
    Route::get('search',[SearchController::class,'search'])->name('search');
    Route::get('/dashboard',function (){
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
