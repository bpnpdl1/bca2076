<?php

use App\Http\Controllers\CategoryController;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/category',[CategoryController::class,'index'])->middleware('auth')->name('category.index');
Route::get('/testdb',[CategoryController::class,'insert'])->middleware('auth')->name('category.testdb');
Route::get('/categorystore',[CategoryController::class,'categorystore'])->middleware('auth')->name('category.testdb');

Route::get('/addcategory',[CategoryController::class,'addcategory'])->middleware('auth')->name('category.addcategory');
Route::get('/category/{id}/edit',[CategoryController::class,'edit'])->middleware('auth')->name('category.edit');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
