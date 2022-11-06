<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;

Route::get('/',[BasicController::class,'index'])->name('home');
Route::get('/form-validation',[BasicController::class,'formValidation'])->name('form.validation');
Route::post('/form-validate-check',[BasicController::class,'formValidateCheck'])->name('form.validate.check');
