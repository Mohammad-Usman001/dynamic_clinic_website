<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::delete('/contacts/delete/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::delete('/contacts/bulk-delete', [ContactController::class, 'bulkDelete'])->name('contacts.bulkDelete');

    
    Route::get('/admin/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/admin/blogs/store', [BlogController::class, 'store'])->name('blogs.store');

    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blog.details'); // For blog details
    Route::get('/blogs/edit/{id}', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/update/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/delete/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
    Route::delete('/blogs/bulk-delete', [BlogController::class, 'bulkDelete'])->name('blogs.bulkDelete');


    Route::get('/profile', [AdminController::class, 'profile'])->name('profile.edit');
    Route::put('/profile/update', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    Route::put('/profile/password', [AdminController::class, 'updatePassword'])->name('admin.profile.password');
});

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about_us', [FrontendController::class, 'about'])->name('about');

Route::get('/contact_us', [FrontendController::class, 'contact'])->name('contact');

Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');

Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [FrontendController::class, 'blogdetail'])->name('frontend.blog-details'); // For blog details


Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');
// Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blog.details');






require __DIR__ . '/auth.php';
