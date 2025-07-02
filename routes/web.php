<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleActionController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'showAboutPage']) -> name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::get('/contact', function () {
    $title = 'Contact Page';
    $content = 'tralalelo tralala';
    $books = ["Deep work", "Steal like a artist", "Story Brand"];
    return view('contact.index', ['title' => $title, 'content' => $content, 'books' => $books]);
})->name('contact');

Route::group(['prefix' => 'blog', 'as' => 'blog.'], function() {
    Route::get('/', [BlogController::class, 'index']);

    Route::get('/create', [BlogController::class, 'create'])->name('create');

    Route::get('/edit', function() {
        return "Blog Edit Page";
    })->name('edit');

    Route::get('/delete', function() {
        return "Blog Delete Page";
    })->name('delete');
});



Route::fallback(function() {
    return "Oooppss we couldnt find the page!";
});


