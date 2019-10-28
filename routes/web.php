<?php

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

Route::get('/', 'ProductController@topRateProduct')->name('products.top_rate');
Route::get('/recently-viewed', 'ProductController@recentlyViewed')->name('products.recently_viewed');
Route::get('/products/{product}', 'ProductController@show')->name('products.show');
Route::get('/all', 'ProductController@index')->name('products.index');
Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');

Route::auth();

Route::prefix('cart')->group(function() {
    Route::get('/index', 'CartController@index')->name('carts.index');
    Route::post('/add-to-cart', 'CartController@addToCart')->name('carts.add_to_cart');
    Route::get('/show', 'CartController@Show')->name('carts.show');
});
