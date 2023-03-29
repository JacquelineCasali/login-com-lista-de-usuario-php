<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;

 use App\Http\Controllers\Auth\UsuarioController;


Route::get('/dashboard',[UsuarioController::class, 'dashboard']
            )->middleware(['auth'])->name('dashboard');





require __DIR__.'/auth.php';
