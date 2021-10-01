<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;

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

//главная
Route::get('/', [MainController::class, 'index'])->name('index');

// Все категории и страницы
Route::get('/all-category', [MainController::class, 'all_category'] )->name('all_category');

//страница с подкатегориями и списком товаров
Route::get('/category', [MainController::class, 'category'] )->name('category');

//Админка
Route::get('/admin', [MainController::class, 'admin'] )->name('admin');
