<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\TranslatorController;

use App\Http\Controllers\BookController;



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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'authors'], function(){
    Route::get('', [AuthorController::class, 'index'])->name('author.index');
    Route::get('create', [AuthorController::class, 'create'])->name('author.create');
    Route::post('store', [AuthorController::class, 'store'])->name('author.store');
    Route::get('edit/{author}', [AuthorController::class, 'edit'])->name('author.edit');
    Route::post('update/{author}', [AuthorController::class, 'update'])->name('author.update');
    Route::post('delete/{author}', [AuthorController::class, 'destroy'])->name('author.destroy');
    Route::get('show/{author}', [AuthorController::class, 'show'])->name('author.show');
    });


    Route::group(['prefix' => 'translators'], function(){
        Route::get('', [TranslatorController::class, 'index'])->name('translator.index');
        Route::get('create', [TranslatorController::class, 'create'])->name('translator.create');
        Route::post('store', [TranslatorController::class, 'store'])->name('translator.store');
        Route::get('edit/{translator}', [TranslatorController::class, 'edit'])->name('translator.edit');
        Route::post('update/{translator}', [TranslatorController::class, 'update'])->name('translator.update');
        Route::post('delete/{translator}', [TranslatorController::class, 'destroy'])->name('translator.destroy');
        Route::get('show/{translator}', [TranslatorController::class, 'show'])->name('translator.show');
        });
        

        Route::group(['prefix' => 'books'], function(){
            Route::get('', [BookController::class, 'index'])->name('book.index');
            Route::get('create', [BookController::class, 'create'])->name('book.create');
            Route::post('store', [BookController::class, 'store'])->name('book.store');
            Route::get('edit/{book}', [BookController::class, 'edit'])->name('book.edit');
            Route::post('update/{book}', [BookController::class, 'update'])->name('book.update');
            Route::post('delete/{book}', [BookController::class, 'destroy'])->name('book.destroy');
            Route::get('show/{book}', [BookController::class, 'show'])->name('book.show');
            });
            