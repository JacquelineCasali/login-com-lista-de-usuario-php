<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('cadastro', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('cadastro', [RegisteredUserController::class, 'store']);

    Route::get('/', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('/', [AuthenticatedSessionController::class, 'store']);

    Route::get('esqueceu-senha', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('esqueceu-senha', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('esqueceu-senha/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('redefinir-senha', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verifica-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verifica-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verifica-notificacao', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirma-senha', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirma-senha', [ConfirmablePasswordController::class, 'store']);

    Route::post('sair', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
