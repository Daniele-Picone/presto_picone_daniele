<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('hompage');
Route::get('create/article',[ArticleController::class, 'create'])->name('create.article');
Route::get('artcile/index' , [ArticleController::class, 'index'])->name('article.index');
Route::get('article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

//rotta categorie

Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');
