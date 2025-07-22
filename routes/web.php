<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\BranchesController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DashboardController::class,'dashboard']);
Route::get('/branches',[BranchesController::class,'index']);
Route::get('/branches/create',[BranchesController::class,'create']);
Route::post('/branches/create',[BranchesController::class,'store']);
Route::get('branches/{id}',[BranchesController::class,'show']);
Route::post('/branches/update',[BranchesController::class,'update']);
Route::get('/branches/delete/{id}',[BranchesController::class,'destroy']);
Route::get('/books',[BooksController::class,'index']);
Route::get('/books/create',[BooksController::class,'create']);
Route::post('/books/create',[BooksController::class,'store']);
Route::get('books/{id}',[BooksController::class,'show']);
Route::post('/books/update',[BooksController::class,'update']);
Route::get('/books/delete/{id}',[BooksController::class,'destroy']);
