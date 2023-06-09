<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RiseController;
use App\Http\Controllers\AdminController;

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

Route::get('/',  [RiseController::class, 'index'])->name('index');
Route::get('/projects',  [RiseController::class, 'projects'])->name('projects');
Route::get('/project/{project_slug}',  [RiseController::class, 'project'])->name('project');
Route::post('/send_mail', [AdminController::class, 'SendMail'])->name('send_mail');

// Admin

Route::view('/administrator/login', 'admin.login')->name('login');
Route::post('/administrator/login_user', [AdminController::class, 'loginUser'])->name('check-user');
Route::get('/administrator/logout', [AdminController::class, 'logout'])->name('logout');

Route::middleware(['auth_check'])->group(function () {
    Route::prefix('administrator')->group(function () {
        Route::view('/add_project_view', 'admin.add_project_view')->name('add_project_view');
        Route::get('/', [AdminController::class, 'listProjects'])->name('dashboard');
        Route::post('/update_project', [AdminController::class, 'updateProject'])->name('update_project');
        Route::get('/delete_project', [AdminController::class, 'deleteProject'])->name('delete_project');
        Route::get('/delete_image', [AdminController::class, 'deleteImage'])->name('delete_image');
        Route::post('/add_project', [AdminController::class, 'addProject'])->name('add_project');
        Route::get('/view_add_gallery_image', [AdminController::class, 'addGalleryImageView'])->name('view_add_gallery_image');
        Route::get('/image_gallery_view', [AdminController::class, 'ImageGalleryView'])->name('image_gallery_view');
        Route::get('/image_gallery_view_search', [AdminController::class, 'ImageGalleryViewSearch'])->name('image_gallery_view_search');
        Route::post('/add_gallery_image', [AdminController::class, 'addGalleryImage'])->name('add_gallery_image');
    });
});