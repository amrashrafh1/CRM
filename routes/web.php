<?php

use App\Http\Controllers\Admin\DocumentTypeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
Route::group(['prefix'=>'admin', 'as' => 'admin.', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::resource('/users', UserController::class);
    Route::resource('/settings', SettingController::class);
    Route::resource('/documents', DocumentController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/permissions', PermissionController::class);
    Route::resource('/contacts', ContactController::class);

    Route::get('/profile', [ProfileController::class , 'index'])->name('profile.index');
    Route::patch('/profile', [ProfileController::class , 'update'])->name('profile.update');


    Route::post('/document/type', [DocumentTypeController::class , 'store'])->name('document_type.store');

});