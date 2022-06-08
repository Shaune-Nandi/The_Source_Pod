<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PodcastController;

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

route::get('/register', [UserController::class, 'show_register'])->name('register');
route::post('/register', [UserController::class, 'authenticate_register'])->name('authenticate_register');

route::get('/login', [UserController::class, 'show_login'])->name('login');
route::post('/login', [UserController::class, 'authenticate_login'])->name('authenticate_login');

route::get('/logout', [UserController::class, 'logout']);

Route::get('/home', [UserController::class, 'show_home'])->name('home');

Route::get('/subscriber/{user}/personal_information', [UserController::class, 'show_user_personal_information']);
Route::post('/subscriber/{user}/personal_information', [UserController::class, 'save_user_personal_information']);

Route::get('/subscriber/{user}/library', [UserController::class, 'show_user_library']);

Route::get('/subscriber/{user}/membership', [UserController::class, 'show_user_membership']);

Route::get('/dashboard', [UserController::class, 'show_admin_dashboard']);


Route::get('/podcast/dashboard', [PodcastController::class, 'show_podcast_dashboard'])->name('podcast_dashboard');

Route::get('/podcast/create', [PodcastController::class, 'create_podcast'])->name('create_podcast');
Route::get('/podcast/update', [PodcastController::class, 'show_update_podcast'])->name('update_podcast_view');
Route::post('/podcast/create', [PodcastController::class, 'save_podcast'])->name('upload_podcast');

//Route::post('upload', [PodcastController::class, 'temp_upload']);

