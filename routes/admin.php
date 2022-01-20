<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\AuthorController;

route::get('', [HomeController::class, 'index']);

// Rutas de categoria
 
route::get('/category', [CategoryController::class, 'index'])->name('category.index');

route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');

route::post('/category', [CategoryController::class, 'store'])->name('category.store');

route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');

route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');

route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');

route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

// Rutas de autor

route::get('/author', [AuthorController::class, 'index'])->name('author.index');

route::get('/author/create', [AuthorController::class, 'create'])->name('author.create');

route::post('/author', [AuthorController::class, 'store'])->name('author.store');

route::get('/author/{author}', [AuthorController::class, 'show'])->name('author.show');

route::get('/author/{id}/edit', [AuthorController::class, 'edit'])->name('author.edit');

route::put('/author/{id}', [AuthorController::class, 'update'])->name('author.update');

route::delete('/author/{id}', [AuthorController::class, 'destroy'])->name('author.destroy');

// Rutas libros

route::get('/book', [BookController::class, 'index'])->name('book.index');

route::get('/book/create', [BookController::class, 'create'])->name('book.create');

route::post('/book', [BookController::class, 'store'])->name('book.store');
