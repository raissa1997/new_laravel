<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/',[HomeController::class,'homepage'])->name('homepage');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');
Route::post('/user_post',[HomeController::class,'user_post'])->middleware('auth')->name('user_post');
Route::get('/my_post',[HomeController::class,'my_post'])->middleware('auth')->name('my_post');
Route::get('/homes',[HomeController::class,'liste_posts'])->name('admin.adminhome');
Route::get('/reject_post/{$id}',[HomeController::class,'reject_post'])->name('reject_post');

require __DIR__.'/auth.php';
