<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;

Route::get("/shoplist", [PostController::class, "shoppingList"])->middleware('auth');
Route::get("/show/{id}", [PostController::class, "show"])->middleware('auth');

Route::get("/create", [PostController::class, "create"])->middleware('auth');
Route::post("/store", [PostController::class, "store"])->middleware('auth');

Route::get("/edit/{id}", [PostController::class, "edit"])->middleware('auth');
Route::post("/update/{id}", [PostController::class, "update"])->middleware('auth');

Route::post('/markAsBought/{id}', [PostController::class, 'markAsBought']);
Route::post('/removeItem/{id}', [PostController::class, 'removeItem']);
Route::post('/clearList', [PostController::class, 'clearList']);

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'login'])->name('doLogin')->middleware('guest');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'register'])->name('doRegister')->middleware('guest');