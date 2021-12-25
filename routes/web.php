<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\AboutusController;
use App\Http\Controllers\Client\ShopController;
use App\Http\Controllers\Client\ShoppingCartController;

// dang nhap dang ky dang xuat user
Route::group(['namespace' => 'Auth','prefix' => 'account'],function(){
    
    Route::get('register','RegisterController@getFormRegister')->name('get.register');
    Route::post('register','RegisterController@postRegister')->name('get.register.store');

    Route::get('login','LoginController@getFormLogin')->name('get.login');
    Route::post('login','LoginController@postLogin')->name('get.login.store');

    Route::get('logout','LoginController@getLogout')->name('get.logout');
});

// // dang ky
// Route::get('register', 'AuthController@showFormRegister')->name('show-form-register');
// Route::post('register', 'AuthController@register')->name('register');

// dang nhap admin
Route::get('/admin-login', 'AuthController@showFormLogin')->name('show-form-login');
Route::post('/login', 'AuthController@login')->name('admin.login');

// client
Route::get('/', 'Client\HomeController@home')->name('home');
// Route::get('/', 'Client\HomeController@getProduct')->name('get.product');
Route::get('/shop', 'Client\ShopController@shop')->name('get.shop');
Route::get('/about-us', 'Client\AboutusController@get_aboutus')->name('get.about-us');
Route::get('/blog', 'Client\BlogController@blog')->name('get.blog');
Route::get('/bai-viet/{id}', 'Client\BlogController@blogDetail')->name('get.blog.detail');
Route::get('/contact', 'Client\ContactController@contact')->name('get.contact');
Route::get('/san-pham/{slug}', 'Client\ProductController@productDetail')->name('get.product.detail');
Route::get('/danh-muc/{cate_name}', 'Client\ProductController@productFilterCate')->name('get.product.cate_name');


// gio hang
Route::get('don-hang', 'Client\ShoppingCartController@index')->name('get.shopping.list');

Route::prefix('shopping')->group(function () {
    route::get('add/{id}','Client\ShoppingCartController@add')->name('get.shopping.add');
    route::get('delete/{id}','Client\ShoppingCartController@delete')->name('get.shopping.delete');
    route::get('update/{id}','Client\ShoppingCartController@update')->name('get.shopping.update');

    route::post('pay','Client\ShoppingCartController@postPay')->name('get.shopping.pay');

});
// admin
Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    Route::get('logout', 'AuthController@logout')->name('admin.logout');
    // category
    Route::prefix('category')->group(function () {

        Route::get('/', 'Admin\CategoryController@index')->name('category.index');

        Route::get('/create', 'Admin\CategoryController@create')->name('category.create');
        Route::post('/store', 'Admin\CategoryController@store')->name('category.store');

        Route::get('/update/{id}', 'Admin\CategoryController@show')->name('category.update');
        Route::post('/update/{id}', 'Admin\CategoryController@edit')->name('category.edit');

        Route::get('/destroy/{id}', 'Admin\CategoryController@destroy')->name('category.destroy');
    });
    // product
    Route::prefix('product')->group(function () {
        Route::get('/', 'Admin\ProductController@index')->name('product.index');
        Route::get('/create', 'Admin\ProductController@create')->name('product.create');
        Route::post('/store', 'Admin\ProductController@store')->name('product.store');

        Route::get('/show/{id}', 'Admin\ProductController@show')->name('product.show');

        Route::get('/edit/{id}', 'Admin\ProductController@edit')->name('product.edit');
        Route::post('/update/{id}', 'Admin\ProductController@update')->name('product.update');

        Route::get('/destroy/{id}', 'Admin\ProductController@destroy')->name('product.destroy');
    });
    // cate post
    Route::prefix('catepost')->group(function () {

        Route::get('/', 'Admin\CatePostController@index')->name('catepost.index');

        Route::get('/create', 'Admin\CatePostController@create')->name('catepost.create');
        Route::post('/store', 'Admin\CatePostController@store')->name('catepost.store');

        Route::get('/edit/{id}', 'Admin\CatePostController@edit')->name('catepost.edit');
        Route::post('/update/{id}', 'Admin\CatePostController@update')->name('catepost.update');

        Route::get('/destroy/{id}', 'Admin\CatePostController@destroy')->name('catepost.destroy');
    });
     // post
     Route::prefix('post')->group(function () {

        Route::get('/', 'Admin\PostController@index')->name('post.index');

        Route::get('/create', 'Admin\PostController@create')->name('post.create');
        Route::post('/store', 'Admin\PostController@store')->name('post.store');

        Route::get('/show/{id}', 'Admin\PostController@show')->name('post.show');

        Route::get('/edit/{id}', 'Admin\PostController@edit')->name('post.edit');
        Route::post('/update/{id}', 'Admin\PostController@update')->name('post.update');

        Route::get('/destroy/{id}', 'Admin\PostController@destroy')->name('post.destroy');
    });
    // keyword
    Route::prefix('keyword')->group(function () {
        Route::get('/', 'Admin\KeywordController@index')->name('keyword.index');
        Route::get('/create', 'Admin\KeywordController@create')->name('keyword.create');
        Route::post('/store', 'Admin\KeywordController@store')->name('keyword.store');

        Route::get('/show/{id}', 'Admin\KeywordController@show')->name('keyword.show');

        Route::get('/edit/{id}', 'Admin\KeywordController@edit')->name('keyword.edit');
        Route::post('/update/{id}', 'Admin\KeywordController@update')->name('keyword.update');

        Route::get('/status/{id}', 'Admin\KeywordController@status')->name('keyword.status');

        Route::get('/destroy/{id}', 'Admin\KeywordController@destroy')->name('keyword.destroy');
    });

    // size
    Route::prefix('size')->group(function () {
        Route::get('/', 'Admin\sizeController@index')->name('size.index');
        Route::get('/create', 'Admin\sizeController@create')->name('size.create');
        Route::post('/store', 'Admin\sizeController@store')->name('size.store');

        Route::get('/show/{id}', 'Admin\sizeController@show')->name('size.show');

        Route::get('/edit/{id}', 'Admin\sizeController@edit')->name('size.edit');
        Route::post('/update/{id}', 'Admin\sizeController@update')->name('size.update');

        Route::get('/status/{id}', 'Admin\sizeController@status')->name('size.status');

        Route::get('/destroy/{id}', 'Admin\sizeController@destroy')->name('size.destroy');
    });

    // color
    Route::prefix('color')->group(function () {
        Route::get('/', 'Admin\ColorController@index')->name('color.index');
        Route::get('/create', 'Admin\ColorController@create')->name('color.create');
        Route::post('/store', 'Admin\ColorController@store')->name('color.store');

        Route::get('/show/{id}', 'Admin\ColorController@show')->name('color.show');

        Route::get('/edit/{id}', 'Admin\ColorController@edit')->name('color.edit');
        Route::post('/update/{id}', 'Admin\ColorController@update')->name('color.update');

        Route::get('/status/{id}', 'Admin\ColorController@status')->name('color.status');

        Route::get('/destroy/{id}', 'Admin\ColorController@destroy')->name('color.destroy');
    });

    // user
    Route::prefix('user')->group(function () {
        Route::get('/', 'Admin\UserController@index')->name('user.index');
    });

    
    // transaction
    Route::prefix('transaction')->group(function () {
        Route::get('/', 'Admin\TransactionController@index')->name('transaction.index');
        Route::get('delete/{id}', 'Admin\TransactionController@destroy')->name('transaction.destroy');
        Route::get('view-transaction/{id}', 'Admin\TransactionController@getTransactionDetail')->name('transaction.detail');
    });
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
