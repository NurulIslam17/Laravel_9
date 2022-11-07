<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\EloquentOrmController;

Route::get('/',[BasicController::class,'index'])->name('home');
Route::get('/form-validation',[BasicController::class,'formValidation'])->name('form.validation');
Route::post('/form-validate-check',[BasicController::class,'formValidateCheck'])->name('form.validate.check');

Route::get('/add-data',[EloquentOrmController::class,'addData'])->name('add.data');
Route::post('/store-phone',[EloquentOrmController::class,'storePhone'])->name('store.phone');
Route::get('/one-to-one',[EloquentOrmController::class,'oneToOne'])->name('one.to.one');

Route::get('/one-to-many',[EloquentOrmController::class,'oneToMany'])->name('one.to.many');
Route::post('/store-post',[EloquentOrmController::class,'storePost'])->name('store.post');
Route::post('/post-comment',[EloquentOrmController::class,'postComment'])->name('post.comment');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});


