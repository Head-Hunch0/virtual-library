<?php

use App\Http\Controllers\authorController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\BookController as ControllersBookController;
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

Route::get('/', function () {
    return view('index');   
});


Route::get('/books', [bookController::class, 'GetBooks']);
Route::get('/book/{id}', [bookController::class, 'GetBook']);
Route::get('/add/book', [bookController::class, 'CreateBook']);
Route::post('/store/book', [bookController::class, 'StoreBook']);


Route::get('/authors', [authorController::class, 'GetAuthors']);
Route::get('/author/{id}', [authorController::class, 'GetAuthor']);
Route::get('/add/author', [authorController::class, 'CreateAuthor']);
Route::post('/store/author', [authorController::class, 'StoreAuthor']);
Route::get('/edit/author/{id}', [authorController::class, 'EditAuthor']);
