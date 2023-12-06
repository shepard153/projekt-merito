<?php

use App\Livewire\Blog;
use App\Livewire\Home;
use App\Livewire\Panel\Posts;
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

Route::get('/', Home::class)->name('home');
Route::get('/blog', Blog::class)->name('blog');

Route::get('panel', Posts::class)
    ->middleware(['auth', 'verified'])
    ->name('panel');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
