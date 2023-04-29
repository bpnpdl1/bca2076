<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductsController;
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




Route::get('/Category',[CategoryController::class,'index'])->middleware('auth')->name('category.index');
Route::get('/CreateCategory',[CategoryController::class,'create'])->middleware('auth')->name('category.create');
Route::get('/EditCategory/{id}',[CategoryController::class,'edit'])->middleware('auth')->name('category.edit');
Route::post('/StoreCategory',[CategoryController::class,'store'])->middleware('auth')->name('category.store');
Route::get('/tandwind',function(){
    return view('tandwind');
});



Route::get('/Products',[ProductsController::class,'index'])->middleware('auth')->name('products.index');
Route::get('/Addproducts',[ProductsController::class,'create'])->middleware('auth')->name('products.addproducts');
Route::post('/store',[ProductsController::class,'store'])->middleware('auth')->name('products.store');
Route::get('/editproduct/{id}',[ProductsController::class,'edit'])->middleware('auth')->name('products.edit');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
