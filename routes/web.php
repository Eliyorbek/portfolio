<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
Route::middleware([\App\Http\Middleware\AdminMiddleware::class])->group(function () {
    Route::get('/admin', function () {
        if (Session::get('locale') ==null) {
            Session::put('locale', 'en');
        }
        App::setLocale(Session::get('locale'));
        return view('backend.index');
    })->name('admin');

    Route::controller(Aboudeletetroller::class)->group(function () {
        Route::get('/about', 'index')->name('about.index');
        Route::post('/about', 'store')->name('about.store');
        Route::delete('/about/{id}', 'destroy')->name('about.delete');
        Route::put('/about/{id}', 'update')->name('about.update');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index')->name('category.index');
        Route::post('/category', 'store')->name('category.store');
        Route::delete('/category/{id}', 'destroy')->name('category.delete');
        Route::put('/category/{id}', 'update')->name('category.update');
    });


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
