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
Route::get('/category/{catid}', [MainController::class, 'category'] )->name('category');

Route::get('/category/{catid}/{subcatid}', [MainController::class, 'subcategory'] )->name('subcategory');

//Админка
Route::get('/admin', [MainController::class, 'admin'] )->name('admin');

//Создание продукта
Route::post('/admin/create-product', [MainController::class, 'create_product']) ->name('create-product');

//Редактирование продукта
Route::get('/admin/edit-product/{id}', [MainController::class, 'edit_product']) ->name('edit-product');

//Обновление продукта
Route::post('/admin/update-product/{id}', [MainController::class, 'update_product']) ->name('update-product');

//Удаление продукта
Route::get('/admin/delete-product/{id}', [MainController::class, 'delete_product']) ->name('delete-product');

// Создание подкатегории
Route::post('/admin/create-subcategory', [MainController::class, 'create_subcategory']) ->name('create-subcategory');

// Редактирование подкатегории
Route::get('/admin/edit-subcategory/{id}', [MainController::class, 'edit_subcategory']) ->name('edit-subcategory');
//update-subcategory
Route::post('/admin/update-subcategory/{id}', [MainController::class, 'update_subcategory']) ->name('update-subcategory');

// Создание категории
Route::post('/admin/create-category', [MainController::class, 'create_category']) ->name('create-category');

//Услуги
Route::get('/services', [MainController::class, 'services'] )->name('services');

//Наши работы
Route::get('/ourworks', [MainController::class, 'ourworks'] )->name('ourworks');

//Наши работы создать группу слайдов
Route::post('/admin/create-owslidegroup', [MainController::class, 'create_owslidegroup'] )->name('create-owslidegroup');

//Наши работы редактировать группу слайдов
Route::get('/admin/edit-owslidegroup/{id}', [MainController::class, 'edit_owslidegroup'] )->name('edit-owslidegroup');

//Наши работы обновить группу слайдов
Route::post('/admin/update-owslidegroup/{id}', [MainController::class, 'update_owslidegroup'] )->name('update-owslidegroup');

//Наши работы удалить группу слайдов
Route::get('/admin/delete-owslidegroup/{id}', [MainController::class, 'delete_owslidegroup'] )->name('delete-owslidegroup');

//Сопутствующие работы
Route::get('/relatedproducts', [MainController::class, 'relatedproducts'] )->name('relatedproducts');

//Референт лист
Route::get('/referentlist', [MainController::class, 'referentlist'] )->name('referentlist');

//Референт лист
Route::post('/sendmail', [MainController::class, 'sendmail'] )->name('sendmail');

//Для слайдера
Route::get('/foslider/{subcatid}', [MainController::class, 'foslider'] )->name('foslider');