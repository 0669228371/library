<?php

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

Route::get('/',['uses' => 'MyController@show'])->name('home');

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', ['uses' => 'admin\AdminController@show'])->name('mainAdmin');

    // View Authors
    Route::get('/create-author', ['uses' => 'admin\AdminController@createAuthor']);
    Route::get('/update-author/{id}',['uses' => 'admin\AdminController@updateAuthor']);

    // View Books
    Route::get('/create-book', ['uses' => 'admin\AdminController@createBook']);
    Route::get('/update-book/{id}', ['uses' => 'admin\AdminController@updateBook']);

    // CRUD Authors

    Route::get('/author/{id}', ['uses' => 'admin\AuthorController@show'])->name('listAuthor');
    Route::post('/create-author', ['uses' => 'admin\AuthorController@create'])->name('createAuthor');
    Route::put('/update-author/{id}',['uses' => 'admin\AuthorController@update'])->name('updateAuthor');
    Route::delete('/author/{id}', ['uses' => 'admin\AuthorController@delete'])->name('deleteAuthor');

    // CRUD Books

    Route::post('/create-book', ['uses' => 'admin\BookController@create'])->name('createBook');
    Route::put('/update-book/{id}', ['uses' => 'admin\BookController@update'])->name('updateBook');
    Route::delete('/book/{id}', ['uses' => 'admin\BookController@delete'])->name('deleteBook');

});
