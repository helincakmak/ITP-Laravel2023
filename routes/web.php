<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\UserPanel\HomeControllerr as UserHomeController;
use \App\Http\Controllers\AdminPanel\AdminMessageController;
use App\Http\Controllers\UserPanel\UsersMessageController;
use App\Models\Admin;
use App\Models\Message;
use \App\Http\Controllers\AdminPanel\SongsController as AdminSongsController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// adminn

Route::get('/admin', [AdminHomeController::class, 'index'])->name( 'admin');

Route::get('/admin/songs', [AdminSongsController::class, 'index'])->name( 'admin_songs');
Route::get('/admin/songs/create', [AdminSongsController::class, 'create'])->name( 'admin_songs_create');
Route::post('/admin/songs/store', [AdminSongsController::class, 'store'])->name('admin_songs_store');
Route::get('/admin/songs/edit/{id}', [AdminSongsController::class, 'edit'])->name( 'admin_songs_edit');
Route::post('/admin/songs/update{id}', [AdminSongsController::class, 'update'])->name( 'admin_songs_update');
Route::get('/admin/songs/show/{id}', [AdminSongsController::class, 'show'])->name( 'admin_songs_show');
Route::get('/admin/songs/destroy/{id}', [AdminSongsController::class, 'destroy'])->name( 'admin_songs_destroy');


//users

Route::get('/users', [UserHomeController ::class, 'announcement'])->name( 'announcement');
Route::get('/users/music', [UserHomeController ::class, 'music'])->name( 'music');


Route::get('/admin/announcement', [App\Http\Controllers\AdminPanel\AnnouncementController::class, 'index'])->name( 'admin_announcement');
Route::get('/admin/announcement/create', [App\Http\Controllers\AdminPanel\AnnouncementController::class, 'create'])->name( 'admin_announcement_create');
Route::post('/admin/announcement/store', [App\Http\Controllers\AdminPanel\AnnouncementController::class, 'store'])->name('admin_announcement_store');
Route::get('/admin/announcement/edit/{id}', [App\Http\Controllers\AdminPanel\AnnouncementController::class, 'edit'])->name( 'admin_announcement_edit');
Route::post('/admin/announcement/update{id}', [App\Http\Controllers\AdminPanel\AnnouncementController::class, 'update'])->name( 'admin_announcement_update');
Route::get('/admin/announcement/destroy/{id}', [App\Http\Controllers\AdminPanel\AnnouncementController::class, 'destroy'])->name( 'admin_announcement_destroy');




//message
// routes/web.php
Route::get('/admin/message', [AdminMessageController::class, 'index'])->name('admin.message.index');
Route::post('/admin/messages/{id}/mark-as-read', [AdminMessageController::class, 'markAsRead'])->name('admin.mark_as_read');
Route::get('/admin/messages/{message}/reply', [AdminMessageController::class, 'replyForm'])->name('admin.reply_form');
Route::post('/admin/messages/{message}/reply', [AdminMessageController::class, 'reply'])->name('admin.reply');
Route::get('/admin/messages/{message}/show', [AdminMessageController::class, 'show'])->name('admin.show_message');

Route::get('/admin/messages/{user}', [AdminMessageController::class, 'showMessages'])->name('admin.show_messages');



Route::middleware(['auth'])->group(function () {
    Route::get('/users/create-message', [UsersMessageController::class, 'createMessage'])->name('users.create_message');
    Route::post('/users/store-message', [UsersMessageController::class, 'storeMessage'])->name('users.store_message');
    Route::get('/users/messages', [UsersMessageController::class, 'showMessages'])->name('users.messages');
    Route::get('/users/messages/{id}', [UsersMessageController::class, 'showMessage'])->name('users.show_message');



    Route::post('/users/messages/{id}/mark-as-read', [UsersMessageController::class, 'markAsRead'])->name('users.mark_as_read');
});

