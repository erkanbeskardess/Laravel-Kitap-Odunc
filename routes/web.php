<?php

use App\Http\Controllers\HomeController;
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

Route::get('/home2', function () {
    return view('welcome');
});
Route::redirect('/anasayfa','/home')->name('anasayfa');

Route::get('/', function (){
    return view('home.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contanct', [HomeController::class, 'contanct'])->name('contanct');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/how', [HomeController::class, 'how'])->name('nasıl');


Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');;
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');
Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome')->middleware('auth');;


Route::middleware('auth')->prefix('admin')->group(function (){

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');


    Route::prefix('books')->middleware('auth')->group(function (){

        Route::get('/', [\App\Http\Controllers\Admin\BooksController::class, 'index'])->name('admin_books');
        Route::get('/create', [\App\Http\Controllers\Admin\BooksController::class, 'create'])->name('admin_books_add');
        Route::post('/store', [\App\Http\Controllers\Admin\BooksController::class, 'store'])->name('admin_books_create');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\BooksController::class, 'edit'])->name('admin_books_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\BooksController::class, 'update'])->name('admin_books_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\BooksController::class, 'destroy'])->name('admin_books_delete');
        Route::get('show', [\App\Http\Controllers\Admin\BooksController::class, 'show'])->name('admin_books_show');




    });
    Route::prefix('message')->middleware('auth')->group(function (){

        Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_messages_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');




    });
    Route::prefix('image')->group(function (){

        Route::get('create/{books_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{books_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{books_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');




    });
    Route::prefix('setting')->middleware('auth')->group(function (){

        Route::get('/', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');




    });




});
Route::prefix('myaccount')->middleware('auth')->namespace('myaccount')->group(function (){

    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');


});









Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
