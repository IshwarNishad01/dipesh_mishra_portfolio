<?php

use App\Http\Controllers\User\AboutUsController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\PageController;
use App\Http\Controllers\User\PortfolioController;
use App\Http\Controllers\User\ServicesController;
use App\Http\Controllers\User\UserIndexController;
use Illuminate\Support\Facades\Route;

Route::controller(UserIndexController::class)->name('user.')->group(function(){
    Route::get('/','index');
});
// -------------- about us controller -------------------
Route::controller(AboutUsController::class)->prefix('about')->name('about.')->group(function(){
    Route::get('/index','index')->name('index');
});
// ------------- services controller ---------------------
Route::controller(ServicesController::class)->prefix('services')->name('services.')->group(function(){
    Route::get('/index','index')->name('index');
});
// --------------- portfolio controller --------------------
Route::controller(PortfolioController::class)->prefix('portfolio')->name('portfolio.')->group(function(){
    Route::get('/index','index')->name('index');
});
// ---------------- contact controller -----------------
Route::controller(ContactController::class)->prefix('contact')->name('contact.')->group(function(){
    Route::get('/index','index')->name('index');
});
// ---------------- page controller -----------------
Route::controller(PageController::class)->prefix('page')->name('page.')->group(function(){
    Route::get('/blog','blog')->name('blog');
    Route::get('/blogDetails','blogDetails')->name('blogDetails');
    Route::get('/element','element')->name('element');
    Route::get('/index/portfolioDetails','portfolioDetails')->name('portfolioDetails');
});