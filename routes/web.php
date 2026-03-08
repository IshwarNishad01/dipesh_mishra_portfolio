<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PhotosController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\User\AboutUsController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\PageController;
use App\Http\Controllers\User\PortfolioController;
use App\Http\Controllers\User\ServicesController;
use App\Http\Controllers\User\UserIndexController;
use Illuminate\Support\Facades\Route;

// admin route

Route::prefix('admin')->middleware('admin')->name('admin.')->group(function () {

    // ------------------ admin panel routes ---------------------------------
    Route::controller(AdminController::class)->group(function () {
        Route::get('/index', 'index')->name('index');
    });

    //logout
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

    // ------------------ admin blogs routes -----------------------------------
    Route::controller(BlogController::class)->prefix('/blog')->name('blog.')->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::post('/delete/{id}', 'destroy')->name('destroy');
    });

    // ------------------ admin contactsUs routes -----------------------------------
    Route::controller(ContactUsController::class)->prefix('/contact')->name('contact.')->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
    });

    // ------------------ admin gallery routes -----------------------------------
    Route::controller(GalleryController::class)->prefix('/gallery')->name('gallery.')->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::post('/delete/{id}', 'destroy')->name('destroy');
    });

    // ------------------ admin settings routes -----------------------------------
    Route::controller(SettingsController::class)->prefix('/settings')->name('settings.')->group(function () {
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
    });
});

//guest route
Route::middleware('guest')->group(function () {
    Route::controller(AuthController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::get('/register', 'register')->name('register');
        Route::post('/register/store', 'registerStore')->name('register.store');
        Route::post('/login/check', 'loginCheck')->name('login.check');
        
    });
});

Route::controller(UserIndexController::class)->name('user.')->group(function () {
    Route::get('/', 'index')->name('index');
});
// -------------- about us controller -------------------
Route::controller(AboutUsController::class)->name('about.')->group(function () {
    Route::get('/about', 'index')->name('index');
});
// ------------- services controller ---------------------
Route::controller(ServicesController::class)->name('services.')->group(function () {
    Route::get('/services', 'index')->name('index');
});
// --------------- portfolio controller --------------------
Route::controller(PortfolioController::class)->name('portfolio.')->group(function () {
    Route::get('/portfolio', 'index')->name('index');
});
// ---------------- contact controller -----------------
Route::controller(ContactController::class)->name('contact.')->group(function () {
    Route::get('/contact', 'index')->name('index');
    Route::get('/contact/store', 'store')->name('store');
});
// ---------------- page controller -----------------
Route::controller(PageController::class)->prefix('page')->name('page.')->group(function () {
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blogDetails', 'blogDetails')->name('blogDetails');
    Route::get('/element', 'element')->name('element');
    Route::get('/index/portfolioDetails', 'portfolioDetails')->name('portfolioDetails');
});


