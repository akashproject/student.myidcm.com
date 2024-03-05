<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'administrator', 'namespace' => 'Admin'], function () {
    Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('admin-register');
    Route::get('/login', [App\Http\Controllers\Administrator\AdminAuthController::class, 'login'])->name('admin-login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('verify-login');
    Route::get('/forgot-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showForgotPasswordForm'])->name('admin-password.request');
    Route::post('/forgot-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('/reset-password/{token}', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('/reset-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'resetPassword'])->name('password.update');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [App\Http\Controllers\Administrator\IndexController::class, 'index'])->name('administrator');
        Route::get('/dashboard', [App\Http\Controllers\Administrator\IndexController::class, 'index'])->name('dashboard');
        Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('administrator-logout');
        Route::get('/update-password/{id}', [App\Http\Controllers\Administrator\IndexController::class, 'updatePassword'])->name('administrator-update-password');
    
        //Page
        Route::get('/pages', [App\Http\Controllers\Administrator\PageController::class, 'index'])->name('admin-pages');
        Route::get('/add-page', [App\Http\Controllers\Administrator\PageController::class, 'Add'])->name('admin-add-page');
        Route::get('/view-page/{id}', [App\Http\Controllers\Administrator\PageController::class, 'show'])->name('admin-view-page');
        Route::post('/save-page', [App\Http\Controllers\Administrator\PageController::class, 'save'])->name('admin-save-page');
        Route::get('/delete-page/{id}', [App\Http\Controllers\Administrator\PageController::class, 'delete'])->name('admin-delete-page');
        
        // Media 
        Route::get('/media', [App\Http\Controllers\Administrator\MediaController::class, 'index'])->name('admin-media');
        Route::get('/view-file/{id}', [App\Http\Controllers\Administrator\MediaController::class, 'view'])->name('admin-view-file');
        Route::post('/upload', [App\Http\Controllers\Administrator\MediaController::class, 'save'])->name('admin-save-media');
        Route::post('/save-file', [App\Http\Controllers\Administrator\MediaController::class, 'updateFile'])->name('admin-save-file');
        Route::get('/delete-file/{id}', [App\Http\Controllers\Administrator\MediaController::class, 'delete'])->name('admin-delete-job');
        Route::post('/search-media', [App\Http\Controllers\Administrator\MediaController::class, 'search'])->name('admin-search-media');

        
        //Settings
        Route::get('/settings', [App\Http\Controllers\Administrator\SettingController::class, 'show'])->name('admin-settings');
        Route::post('/save-settings', [App\Http\Controllers\Administrator\SettingController::class, 'save'])->name('admin-save-settings');
    });
    // Will be inside middleware
});
//Page
Route::get('/home', function () {
    return redirect()->route('administrator');  
});
