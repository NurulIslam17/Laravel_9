<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;

Route::get('/',[BasicController::class,'index'])->name('home');
Route::get('/form-validation',[BasicController::class,'formValidation'])->name('form.validation');
Route::post('/form-validate-check',[BasicController::class,'formValidateCheck'])->name('form.validate.check');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});


