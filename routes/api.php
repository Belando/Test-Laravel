<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\BookController as Book;

use App\Http\Controllers\Api\V1\AuthorController as Author;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('books',[Book::class, 'index']);

Route::get('books/title={value}',[Book::class, 'getByTitle']); //definimos ruta 

Route::get('books/{id}',[Book::class, 'getById']); 

Route::post('books',[Book::class, 'store']); 

Route::delete('books/{id}',[Book::class, 'destroy']);

Route::put('books',[Book::class, 'update']);

//AUTORES

Route::get('authors',[Author::class, 'index']);

Route::get('authors/name={value}',[Author::class, 'getByName']);  

Route::get('authors/{id}',[Author::class, 'getById']); 

Route::post('authors',[Author::class, 'store']); 

Route::delete('authors/{id}',[Author::class, 'destroy']);

Route::put('authors',[Author::class, 'update']);
