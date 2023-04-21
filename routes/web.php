<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/pages', [\App\Http\Controllers\PageController::class, 'index'])->name('pages.index');
Route::get('pages/{page:slug}', [\App\Http\Controllers\PageController::class, 'show'])->name('pages.show');

Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('filament.auth.login');
    }

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('user')->middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::get('/blog/{blog:slug}/edit', [BlogController::class, 'edit'])->name('blog.edit');
});

Route::get('/blog', [BlogController::class, 'publicIndex'])->name('blog.public-index');
Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');

require __DIR__.'/auth.php';
