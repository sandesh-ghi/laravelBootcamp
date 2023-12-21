<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\TypeController;
//use App\Http\Controllers\BookController;
//use App\Http\Controllers\StudentController;
//use App\Http\Controllers\BorrowControllers;
//use App\Http\Controllers\AuthorController;

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
    return view('welcome');
});
Route::get('backend/students/create',[App\Http\Controllers\StudentController::class,'create'])->name('backend.student.create');
Route::post('backend/students/store',[App\Http\Controllers\StudentController::class,'store'])->name('backend.student.store');


//books
Route::get('backend/books/create',[App\Http\Controllers\BookController::class,'create'])->name('backend.book.create');
Route::post('backend/books/store',[App\Http\Controllers\BookController::class,'store'])->name('backend.book.store');
//list and view book
Route::get('backend/books',[App\Http\Controllers\BookController::class,'index'])->name('backend.book.index');
Route::get('backend/books/{book_id}',[App\Http\Controllers\BookController::class,'show'])->name('backend.books.show');
//book delete
Route::delete('backend/books/{book_id}',[App\Http\Controllers\BookController::class,'destroy'])->name('backend.books.destroy');
//book edit and update
Route::get('backend/books/{book_id}/edit',[App\Http\Controllers\BookController::class,'edit'])->name('backend.books.edit');
Route::put('backend/books/{book_id}',[App\Http\Controllers\BookController::class,'update'])->name('backend.books.update');






//authors
Route::get('backend/authors/create',[App\Http\Controllers\AuthorController::class,'create'])->name('backend.author.create');
Route::post('backend/authors/store',[App\Http\Controllers\AuthorController::class,'store'])->name('backend.author.store');
//list and view author
Route::get('backend/authors',[App\Http\Controllers\AuthorController::class,'index'])->name('backend.authors.index');
Route::get('backend/authors/{author_id}',[App\Http\Controllers\AuthorController::class,'show'])->name('backend.authors.show');
//authors edit and update
Route::get('backend/authors/{author_id}/edit',[App\Http\Controllers\AuthorController::class,'edit'])->name('backend.authors.edit');
Route::put('backend/authors/{author_id}',[App\Http\Controllers\AuthorController::class,'update'])->name('backend.authors.update');
Route::delete('backend/authors/{author_id}',[App\Http\Controllers\AuthorController::class,'destroy'])->name('backend.authors.destroy');




Route::get('backend/types/create',[App\Http\Controllers\TypeController::class,'create'])->name('backend.type.create');
Route::post('backend/types/store',[App\Http\Controllers\TypeController::class,'store'])->name('backend.type.store');

Route::get('backend/borrows/create',[App\Http\Controllers\BorrowController::class,'create'])->name('backend.borrow.create');
Route::post('backend/borrows/store',[App\Http\Controllers\BorrowController::class,'store'])->name('backend.borrow.store');






