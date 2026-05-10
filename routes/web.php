<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\productController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');})->name('dashboard');

// category
    Route::get('/admin/category/',[categoryController::class,'index'])->name('category');
    Route::get('/admin/category/create',[categoryController::class,'create'])->name('category.create');
    Route::post('/admin/category/store',[categoryController::class,'store'])->name('category.store');
    Route::get('/admin/category/edit/{id}',[categoryController::class,'edit'])->name('category.edit');
    Route::post('/admin/category/update/{id}',[categoryController::class,'update'])->name('category.update');
    Route::post('/admin/category/destroy/{id}',[categoryController::class,'destroy'])->name('category.destroy');

// brand
    Route::get('/admin/brand/',[brandController::class,'index'])->name('brand');
    Route::get('/admin/brand/create',[brandController::class,'create'])->name('brand.create');
    Route::post('/admin/brand/store',[brandController::class,'store'])->name('brand.store');
    Route::get('/admin/brand/edit/{id}',[brandController::class,'edit'])->name('brand.edit');
    Route::post('/admin/brand/update/{id}',[brandController::class,'update'])->name('brand.update');
    Route::post('/admin/brand/destroy/{id}',[brandController::class,'destroy'])->name('brand.destroy');

//product
    Route::get('/admin/product/',[productController::class,'index'])->name('product');
    Route::get('/admin/product/create',[productController::class,'create'])->name('product.create');
    Route::post('/admin/product/store',[productController::class,'store'])->name('product.store');
    Route::get('/admin/product/edit/{id}',[productController::class,'edit'])->name('product.edit');
    Route::post('/admin/product/update/{id}',[productController::class,'update'])->name('product.update');
    Route::post('/admin/product/destroy/{id}',[productController::class,'destroy'])->name('product.destroy');

});
