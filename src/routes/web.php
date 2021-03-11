<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Luan\AdminPanel\AdminPanel\Auth\LoginController;
use Luan\AdminPanel\AdminPanel\Auth\LogoutController;

Route::group(['middleware' => ['web','auth']], function(){
    
    Route::get('admin',function()
    {
        dd(Auth::user());
        // return view('adpanel::AdminPanel.dashboard');
    })->name('admin.dashboard');
});;
Route::get('login',function(){
    return view('adpanel::AdminPanel.login');
})->name('login');
Route::post('login/authenticate',[LoginController::class,'login'])->name('login.authenticate');
Route::get('logout',[LogoutController::class,'logout'])->name('logout');
