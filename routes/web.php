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

Route::get('/', function () { return view('home'); })->name('website');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'administrator', 'namespace' => 'admin', 'middleware' => ['auth','role:super-admin|admin']], function () {
    Route::get('/dashboard', [App\Http\Controllers\Administrator\IndexController::class, 'index'])->name('dashboard');
    Route::get('/', [App\Http\Controllers\Administrator\IndexController::class, 'index'])->name('administrator');
    
    //Users
    Route::get('/users', [App\Http\Controllers\Administrator\UserController::class, 'index'])->name('admin-all-users');
    Route::get('/users/{role_id}', [App\Http\Controllers\Administrator\UserController::class, 'userByCategory'])->name('admin-users');
    Route::get('/add-user', [App\Http\Controllers\Administrator\UserController::class, 'add'])->name('admin-add-user');
    Route::get('/user/{id}', [App\Http\Controllers\Administrator\UserController::class, 'show'])->name('admin-user');
    Route::post('/save-user', [App\Http\Controllers\Administrator\UserController::class, 'save'])->name('admin-save-user');
    Route::post('/insert-user', [App\Http\Controllers\Administrator\UserController::class, 'insert'])->name('admin-insert-user');
    Route::get('/delete-user/{id}', [App\Http\Controllers\Administrator\UserController::class, 'delete'])->name('admin-delete-user');
    Route::get('/approve-user/{id}/{is_approve}', [App\Http\Controllers\Administrator\UserController::class, 'approve'])->name('admin-approve-user');

    Route::get('/media', [App\Http\Controllers\Administrator\MediaController::class, 'index'])->name('admin-media');
    Route::get('/view-file/{id}', [App\Http\Controllers\Administrator\MediaController::class, 'view'])->name('admin-view-file');
    Route::post('/upload', [App\Http\Controllers\Administrator\MediaController::class, 'save'])->name('admin-save-media');
    Route::post('/save-file', [App\Http\Controllers\Administrator\MediaController::class, 'updateFile'])->name('admin-save-file');
    Route::get('/delete-file/{id}', [App\Http\Controllers\Administrator\MediaController::class, 'delete'])->name('admin-delete-job');
    Route::post('/search-media', [App\Http\Controllers\Administrator\MediaController::class, 'search'])->name('admin-search-media');
    
    //Settings
    Route::get('/settings', [App\Http\Controllers\Administrator\SettingController::class, 'show'])->name('admin-settings');
    Route::post('/save-settings', [App\Http\Controllers\Administrator\SettingController::class, 'save'])->name('admin-save-settings');

    //Courses
    Route::get('/courses', [App\Http\Controllers\Administrator\CourseController::class, 'index'])->name('admin-courses');
    Route::get('/add-course', [App\Http\Controllers\Administrator\CourseController::class, 'Add'])->name('admin-add-course');
    Route::get('/show-course/{id}', [App\Http\Controllers\Administrator\CourseController::class, 'show'])->name('admin-show-course');
    Route::post('/save-course', [App\Http\Controllers\Administrator\CourseController::class, 'save'])->name('admin-save-course');
    Route::get('/delete-course/{id}', [App\Http\Controllers\Administrator\CourseController::class, 'delete'])->name('admin-delete-course');

    //Modules
    Route::get('/modules/{course_id}', [App\Http\Controllers\Administrator\ModuleController::class, 'index'])->name('admin-modules');
    Route::get('/add-module/{course_id}', [App\Http\Controllers\Administrator\ModuleController::class, 'add'])->name('admin-add-module');
    Route::get('/view-module/{id}', [App\Http\Controllers\Administrator\ModuleController::class, 'show'])->name('admin-view-module');
    Route::post('/save-module', [App\Http\Controllers\Administrator\ModuleController::class, 'save'])->name('admin-save-module');
    Route::get('/delete-module/{id}', [App\Http\Controllers\Administrator\ModuleController::class, 'delete'])->name('admin-delete-module');

    Route::group(['middleware' => ['role:super-admin']], function () {
        Route::get('/manage-roles', [App\Http\Controllers\Administrator\AccessibilityController::class, 'index'])->name('manage-roles');
        Route::get('/create-accessibility', [App\Http\Controllers\Administrator\AccessibilityController::class, 'createAccessibility'])->name('role-master');
        Route::get('/edit-accessibility/{id}', [App\Http\Controllers\Administrator\AccessibilityController::class, 'show'])->name('edit-accessibility');
        Route::post('/save-accessibility', [App\Http\Controllers\Administrator\AccessibilityController::class, 'saveAccessibility'])->name('save-accessibility');
        Route::get('/assign-role/{id}', [App\Http\Controllers\Administrator\AssignRoleController::class, 'index'])->name('assign-role.index');
        Route::post('/assign-role', [App\Http\Controllers\Administrator\AssignRoleController::class, 'save'])->name('assign-role.save');
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/account', [App\Http\Controllers\UserController::class, 'account'])->name('account');
    Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
});