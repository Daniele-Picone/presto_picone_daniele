<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('create/article',[ArticleController::class, 'create'])->name('create.article')->middleware('auth');
Route::get('artcile/index' , [ArticleController::class, 'index'])->name('article.index');
Route::get('article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

//rotta categorie

Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');

//revisore dashbord
Route::get('revisor/index',[RevisorController::class, 'index'] )->middleware('isRevisor')->name('revisor.index');
Route::patch('/accept/{article}', [RevisorController::class, 'accept' ])->name('accept');
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');

//invio email
Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

// search
Route::get('/search/article', [PublicController::class, 'searchArticles'])->name('article.search');

//language
Route::post('/lingua/{lang}',[PublicController::class, 'setLanguage'])->name('setLocale');