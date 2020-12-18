<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insertCategory', function () {
    return view('insertCategory');
});



Route::get('/contactus', function () {
    return view('contact');
});



Route::post('/insertCategory/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('addCategory');

Route::get('/showCategory', [App\Http\Controllers\CategoryController::class, 'show'])->name('showCategory');

Route::get('/deleteCategory/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('deleteCategory');


Route::post('/insertProduct/store', [App\Http\Controllers\ProductController::class, 'store'])->name('addProduct');

Route::get('/showProduct', [App\Http\Controllers\ProductController::class, 'show'])->name('showProduct');

Route::get('/insertProduct', [App\Http\Controllers\ProductController::class, 'create'])->name('insertProduct');

Route::get('/editproduct/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('editproduct');

Route::get('/deleteProduct/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('deleteProduct');

Route::post('/updateproduct', [App\Http\Controllers\ProductController::class, 'update'])->name('updateproduct');

Route::get('/clientView', [App\Http\Controllers\ProductController::class, 'clientView'])->name('clientView');

Route::post('/searchproduct', [App\Http\Controllers\ProductController::class, 'search'])->name('search.product');

Route::get('/product_detail/{id}', [App\Http\Controllers\ProductController::class, 'showProductDetail'])->name('product.detail');
//productdetail.blade.php?id=11

Route::post('/addToCart', [App\Http\Controllers\CartController::class, 'add'])->name('add.to.cart'); // when user click on add to cart in product detail, id and quantity add to cart

Route::get('/myCart', [App\Http\Controllers\CartController::class, 'show'])->name('my.cart');  //user view all items added to cart

Route::get('/deleteCart/{id}', [App\Http\Controllers\CartController::class, 'delete'])->name('deleteCart');

Route::get('/showmyCart', [App\Http\Controllers\CartController::class, 'showMyCart'])->name('show.myCart');

Route::post('/createorder', [App\Http\Controllers\OrderController::class, 'add'])->name('create.order');

Route::post('/createorder', [App\Http\Controllers\OrderController::class, 'add'])->name('create.order');

Route::get('/myorder', [App\Http\Controllers\OrderController::class, 'show'])->name('my.order');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');