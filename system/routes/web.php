<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::view('/', 'livewire.pages.auth.login')->name('login'); // Root URL goes to login page
Route::view('system.test', 'livewire.pages.auth.login')->name('system.test'); // Optional alternative route
Route::post('/register', [AuthController::class, 'store'])->name('register.store'); // Registration route

Route::view('/dashboard', 'dashboard')->middleware('auth')->name('dashboard');
Route::view('/documents', 'livewire.welcome.Nav_Chief_Documents')->name('documents');
Route::view('/documents2', 'livewire.welcome.Nav_Chief_Documents2')->name('documents2');
Route::view('/documents22', 'livewire.welcome.Nav_Chief_Documents22')->name('documents22');
Route::view('/documents2f', 'livewire.welcome.Nav_Chief_Documents2f')->name('documents2f');
Route::view('/documents3', 'livewire.welcome.Nav_Chief_Documents3')->name('documents3');
Route::view('/documents3f', 'livewire.welcome.Nav_Chief_Documents3f')->name('documents3f');
Route::view('/documents33', 'livewire.welcome.Nav_Chief_Documents33')->name('documents33');
Route::view('/documents4', 'livewire.welcome.Nav_Chief_Documents4')->name('documents4');
Route::view('/documents4f', 'livewire.welcome.Nav_Chief_Documents4f')->name('documents4f');
Route::view('/documents44', 'livewire.welcome.Nav_Chief_Documents44')->name('documents44');
Route::view('/documents5', 'livewire.welcome.Nav_Chief_Documents5')->name('documents5');
Route::view('/documents5f', 'livewire.welcome.Nav_Chief_Documents5f')->name('documents5f');
Route::view('/documents55', 'livewire.welcome.Nav_Chief_Documents55')->name('documents55');

Route::view('/documentsf1', 'livewire.welcome.DocuFolder1')->name('documentsf1');
Route::view('/documentsf2', 'livewire.welcome.DocuFolder2')->name('documentsf2');
Route::view('/documentsf3', 'livewire.welcome.DocuFolder3')->name('documentsf3');
Route::view('/documentsf5', 'livewire.welcome.DocuFolder5')->name('documentsf5');
Route::view('/documentsf6', 'livewire.welcome.DocuFolder6')->name('documentsf6');
Route::view('/documentsf7', 'livewire.welcome.DocuFolder7')->name('documentsf7');
Route::view('/documentsf8', 'livewire.welcome.DocuFolder8')->name('documentsf8');
Route::view('/documentsf9', 'livewire.welcome.DocuFolder9')->name('documentsf9');
Route::view('/documentsf10', 'livewire.welcome.DocuFolder10')->name('documentsf10');
Route::view('/documentsf11', 'livewire.welcome.DocuFolder11')->name('documentsf11');
Route::view('/documentsf12', 'livewire.welcome.DocuFolder12')->name('documentsf12');
Route::view('/documentsf13', 'livewire.welcome.DocuFolder13')->name('documentsf13');
Route::view('/documentsf14', 'livewire.welcome.DocuFolder14')->name('documentsf14');

Route::view('/documentsb1', 'livewire.welcome.DocuFolderb1')->name('documentsb1');
Route::view('/documentsb2', 'livewire.welcome.DocuFolderb2')->name('documentsb2');
Route::view('/documentsb3', 'livewire.welcome.DocuFolderb3')->name('documentsb3');
Route::view('/documentsb5', 'livewire.welcome.DocuFolderb5')->name('documentsb5');
Route::view('/documentsb6', 'livewire.welcome.DocuFolderb6')->name('documentsb6');
Route::view('/documentsb7', 'livewire.welcome.DocuFolderb7')->name('documentsb7');
Route::view('/documentsb8', 'livewire.welcome.DocuFolderb8')->name('documentsb8');
Route::view('/documentsb9', 'livewire.welcome.DocuFolderb9')->name('documentsb9');
Route::view('/documentsb10', 'livewire.welcome.DocuFolderb10')->name('documentsb10');
Route::view('/documentsb11', 'livewire.welcome.DocuFolderb11')->name('documentsb11');
Route::view('/documentsb12', 'livewire.welcome.DocuFolderb12')->name('documentsb12');
Route::view('/documentsb13', 'livewire.welcome.DocuFolderb13')->name('documentsb13');
Route::view('/documentsb14', 'livewire.welcome.DocuFolderb14')->name('documentsb14');

Route::view('/request', 'livewire.welcome.Nav_Chief_Request')->name('request');
Route::view('/chief-event2', 'livewire.welcome.Nav_Chief_Event2')->name('chief.event2');
Route::view('/event', 'livewire.welcome.Nav_Chief_Event')->name('event');
Route::view('/users', 'livewire.welcome.Nav_Chief_Users')->name('users');
Route::view('/users2', 'livewire.welcome.Nav_Chief_Users2')->name('users2');
Route::view('/users3', 'livewire.welcome.Nav_Chief_Users3')->name('users3');
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
