<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::view('/', 'livewire.pages.auth.login')->name('login'); // Root URL goes to login page
Route::view('system.test', 'livewire.pages.auth.login')->name('system.test'); // Optional alternative route
Route::post('/register', [AuthController::class, 'store'])->name('register.store'); // Registration route

Route::view('/dashboard', 'dashboard')->middleware('auth')->name('dashboard');
Route::view('/documents', 'livewire.welcome.Nav_Chief_Documents')->middleware('auth')->name('documents');
Route::view('/documents2', 'livewire.welcome.Nav_Chief_Documents2')->name('documents2');
Route::view('/documents3', 'livewire.welcome.Nav_Chief_Documents3')->name('documents3');
Route::view('/documents4', 'livewire.welcome.Nav_Chief_Documents4')->name('documents4');
Route::view('/documents5', 'livewire.welcome.Nav_Chief_Documents5')->name('documents5');
Route::view('/request', 'livewire.welcome.Nav_Chief_Request')->name('request');
Route::view('/chief-event2', 'livewire.welcome.Nav_Chief_Event2')->name('chief.event2');
Route::view('/event', 'livewire.welcome.Nav_Chief_Event')->name('event');
Route::view('/users', 'livewire.welcome.Nav_Chief_Users')->middleware('auth')->name('users');
Route::view('/users2', 'livewire.welcome.Nav_Chief_Users2')->name('users2');
Route::view('/users3', 'livewire.welcome.Nav_Chief_Users3s')->name('users3');
Route::view('/report', 'livewire.welcome.Nav_Chief_Report')->name('report');
Route::view('/history', 'livewire.welcome.Nav_Chief_History')->name('history');
Route::view('/profile1', 'livewire.welcome.Nav_Chief_Profile1')->name('profile1');
Route::view('/password1', 'livewire.welcome.Nav_Chief_Password1')->name('password1');
Route::view('/bin', 'livewire.welcome.Nav_Chief_Bin')->name('bin');
Route::view('/activity', 'livewire.welcome.Nav_Chief_ActivityLog')->name('activity');
Route::view('/backup', 'livewire.welcome.Nav_Chief_Backup')->name('backup');
Route::view('/register1', 'livewire.pages.auth.register')->name('register1');
Route::view('/verify1', 'livewire.pages.auth.Landing_VerificationEmail')->name('verify1');
Route::view('/login1', 'livewire.pages.auth.login')->name('login1');
Route::view('/forgot1', 'livewire.pages.auth.forgot-password')->name('forgot1');
Route::view('/profile2', 'livewire.pages.auth.Landing_Profile')->name('profile2');
Route::view('/cdashboard', 'livewire.welcome.Client_Dashboard')->middleware('auth')->name('cdashboard');
Route::view('/Cevent', 'livewire.welcome.Client_Events')->name('Cevent');
Route::view('/Chistory', 'livewire.welcome.Client_History')->name('Chistory');
Route::view('/Cform', 'livewire.welcome.Client_RequestForm')->name('Cform');
Route::view('/Ctracking', 'livewire.welcome.Client_Tracking')->name('Ctracking');
Route::view('/Cprofile', 'livewire.welcome.Client_Profile')->name('Cprofile');
Route::view('/Cpassword', 'livewire.welcome.Client_Password')->name('Cpassword');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login');
    })->name('logout');


require __DIR__.'/auth.php';
