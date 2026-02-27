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
Route::controller(AboutUsController::class)->name('about.')->group(function(){
    Route::get('/about','index')->name('index');
});
// ------------- services controller ---------------------
Route::controller(ServicesController::class)->name('services.')->group(function(){
    Route::get('/services','index')->name('index');
});
// --------------- portfolio controller --------------------
Route::controller(PortfolioController::class)->name('portfolio.')->group(function(){
    Route::get('/portfolio','index')->name('index');
});
// ---------------- contact controller -----------------
Route::controller(ContactController::class)->name('contact.')->group(function(){
    Route::get('/contact','index')->name('index');
});
// ---------------- page controller -----------------
Route::controller(PageController::class)->prefix('page')->name('page.')->group(function(){
    Route::get('/blog','blog')->name('blog');
    Route::get('/blogDetails','blogDetails')->name('blogDetails');
    Route::get('/element','element')->name('element');
    Route::get('/index/portfolioDetails','portfolioDetails')->name('portfolioDetails');
});