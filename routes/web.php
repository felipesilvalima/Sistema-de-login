<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TrocaSenhaController;

Route::get('dashbord',[RegisterController::class,'index'])->name('dasboard.index');


Route::prefix('login')->group(function(){
    Route::view('/','login')->name('login.auth');
    Route::post('/',[AuthController::class,'auth'])->name('auth.login');
   
});

Route::prefix('register')->group(function(){
    Route::get('/',[AuthController::class,'create'])->name('login.create');
    Route::post('Users',[RegisterController::class,'store'])->name('user.store');

});

Route::get('/logout',[AuthController::class,'logout'])->name('login.logout');

Route::prefix('enviarEmail')->group(function(){
    Route::get('/',[TrocaSenhaController::class,'enviarEmail'])->name('enviar.Email');
    Route::post('/',[TrocaSenhaController::class, 'enviarEmail'])->name('enviar.Email');

});



