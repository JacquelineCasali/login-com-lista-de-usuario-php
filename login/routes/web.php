<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
use App\Models\User;
 use App\Http\Controllers\Auth\UsuarioController;
// Route::get('/', function () {
//     return view('auth/login');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Route::get('/dashboard',[UsuarioController::class, 'index']
// )->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
