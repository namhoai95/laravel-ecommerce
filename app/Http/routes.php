<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/', ['as' => 'home', 'uses' => 'ProductController@getDataIndex']);

//Route::get('products', function () {
//    return view('products');
//});

/*Route::get('detail', function () {
    return view('detail');
});*/

Route::get('products', 'ProductController@getProduct');

Route::get('products/{namealias}','CategoryController@show');

Route::get('manufacturer/{namealias}', 'ManufacturerController@show');

Route::get('detail/{name}.html',['as' => 'detail', 'uses' => 'ProductController@show']);
Route::post('detail/{id}/comment', ['as' => 'detail.comment', 'uses' => 'CommentController@comment']);

Route::get('review', function () {
    return view('review');
});

Route::get('review-single', function () {
    return view('review-single');
});

Route::get('admin',['middleware' => 'isadmin', 'as' => 'admin.index', function() {
    $categorycount = \App\Category::count();
    $ordercount = \App\Order::count();
    $usercount = \App\User::count();
    $productcount = \App\Product::count();
    $manufacturercount = \App\Manufacturer::count();
    return view('admin.index',['usercount' => $usercount,'ordercount' => $ordercount,'categorycount' => $categorycount,'productcount' => $productcount,'manufacturercount' => $manufacturercount]);
}]);

Route::group(['middleware' => 'isadmin'], function () {
    Route::group(['prefix' => 'admin','middleware' => 'isadmin'], function() {
        Route::group(['prefix' => 'products'], function() {
            Route::get('list',['as' => 'admin.products.list', 'uses' => 'Admin\AdminProductController@index']);
            Route::get('create', ['as' => 'admin.products.getCreate', 'uses' => 'Admin\AdminProductController@create']);
            Route::post('create', ['as' => 'admin.products.postCreate', 'uses' => 'Admin\AdminProductController@store']);
            Route::get('delete/{id}',['as' => 'admin.products.delete', 'uses' => 'Admin\AdminProductController@destroy']);
            Route::get('{id}/edit',['as' => 'admin.products.getEdit', 'uses' => 'Admin\AdminProductController@edit']);
            Route::post('{id}/edit',['as' => 'admin.products.postEdit', 'uses' => 'Admin\AdminProductController@update']);
            Route::get('update-hide/{id}/{hide}',['as' => 'admin.manufacturer.update-hide', 'uses' => 'Admin\AdminProductController@postEditHide']);
        });
        Route::group(['prefix' => 'category'], function() {
            Route::get('list',['as' => 'admin.category.list', 'uses' => 'Admin\AdminCategoryController@getList']);
            Route::get('create',['as' => 'admin.category.getCreate', 'uses' => 'Admin\AdminCategoryController@getCreate']);
            Route::post('create',['as' => 'admin.category.postCreate', 'uses' => 'Admin\AdminCategoryController@postCreate']);
            Route::get('delete/{id}', ['as' => 'admin.category.delete', 'uses' => 'Admin\AdminCategoryController@delete']);
            Route::get('{id}/edit',['as' => 'admin.category.getEdit', 'uses' => 'Admin\AdminCategoryController@getEdit']);
            Route::post('{id}/edit',['as' => 'admin.category.postEdit', 'uses' => 'Admin\AdminCategoryController@postEdit']);
            Route::get('update-hide/{id}/{hide}',['as' => 'admin.category.update-hide', 'uses' => 'Admin\AdminCategoryController@postEditHide']);
        });
        Route::group(['prefix' => 'manufacturer'], function() {
            Route::get('list',['as' => 'admin.manufacturer.list', 'uses' => 'Admin\AdminManufacturerController@getList']);
            Route::get('create',['as' => 'admin.manufacturer.getCreate', 'uses' => 'Admin\AdminManufacturerController@getCreate']);
            Route::post('create',['as' => 'admin.manufacturer.postCreate', 'uses' => 'Admin\AdminManufacturerController@postCreate']);
            Route::get('delete/{id}',['as' => 'admin.manufacturer.delete', 'uses' => 'Admin\AdminManufacturerController@delete']);
            Route::get('{id}/edit',['as' => 'admin.manufacturer.getEdit', 'uses' => 'Admin\AdminManufacturerController@getEdit']);
            Route::post('{id}/edit',['as' => 'admin.manufacturer.postEdit', 'uses' => 'Admin\AdminManufacturerController@postEdit']);
            Route::get('update-hide/{id}/{hide}',['as' => 'admin.manufacturer.update-hide', 'uses' => 'Admin\AdminManufacturerController@postEditHide']);
        });
        Route::group(['prefix' => 'user'], function() {
            Route::get('list',['as' => 'admin.user.list', 'uses' => 'Admin\AdminUserController@getList']);
            Route::get('create',['as' => 'admin.user.getCreate', 'uses' => 'Admin\AdminUserController@getCreate']);
            Route::post('create',['as' => 'admin.user.postCreate', 'uses' => 'Admin\AdminUserController@postCreate']);
            Route::get('delete/{id}',['as' => 'admin.user.delete', 'uses' => 'Admin\AdminUserController@delete']);
            Route::get('{id}/edit',['as' => 'admin.user.getEdit', 'uses' => 'Admin\AdminUserController@getEdit']);
            Route::post('{id}/edit',['as' => 'admin.user.postEdit', 'uses' => 'Admin\AdminUserController@postEdit']);
        });
        Route::group(['prefix' => 'order'], function() {
            Route::get('list',['as' => 'admin.order.list', 'uses' => 'Admin\AdminOrderController@getList']);
            Route::get('{id}/edit',['as' => 'admin.order.getEdit', 'uses' => 'Admin\AdminOrderController@getEdit']);
            Route::post('{id}/edit',['as' => 'admin.order.postEdit', 'uses' => 'Admin\AdminOrderController@postEdit']);
        });
    });
});

Route::get('admin/login',['as' => 'admin.getLogin', 'uses' => 'Auth\AuthController@getAdminLogin']);
Route::post('admin/login',['as' => 'admin.postLogin', 'uses' => 'Auth\AuthController@postAdminLogin']);
Route::get('admin/logout', ['as' => 'admin.getLogout', 'uses' => 'Auth\AuthController@getLogout']);


Route::get('user/login', ['as' => 'user.getLogin', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('user/login', ['as' => 'user.postLogin', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);
Route::get('user/{id}/edit',['middleware' => 'auth', 'as' => 'user.getEdit.password', 'uses' => 'Auth\PasswordController@getEditPassword']);
Route::post('user/{id}/edit',['as' => 'user.postEdit.password', 'uses' => 'Auth\PasswordController@postEditPassword']);
Route::post('user/{id}/edit-info',['as' => 'user.postEditInfo','uses' => 'Auth\AuthController@postEditInfo']);

Route::get('user/register',['as' => 'user.getRegister', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('user/register','Auth\AuthController@postRegister');
Route::get('register/verify/{confirm_code}',['as' => 'auth.verify', 'uses' => 'Auth\AuthController@verify']);
Route::post('user/check-email',['as' => 'auth.check-email', 'uses' => 'Auth\AuthController@checkEmail']);

Route::get('password/email', 'Auth\PasswordController@getEmailResetPassword');
Route::post('password/email', 'Auth\PasswordController@postEmailResetPassword');
Route::get('password/reset/{token}','Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postResetPassword');

Route::get('contact',['as' => 'getContact', 'uses' => 'ContactController@getContact']);
Route::post('contact',['as' => 'postContact', 'uses' => 'ContactController@postContact']);

Route::get('buy/{id}',['as' => 'buyItem', 'uses' => 'ProductController@buyItem']);
Route::get('cart',['as' => 'cart', 'uses' => 'ProductController@cart']);
Route::post('delete-product/{id}',['as' => 'delete.product', 'uses' => 'ProductController@deleteProduct']);
Route::post('update/{id}/{qty}',['as' => 'update','uses' => 'ProductController@updateProduct']);
Route::get('pay', ['as' => 'getPay', 'uses' => 'ProductController@getPay']);
Route::post('pay', ['as' => 'postPay', 'uses' => 'ProductController@postPay']);

Route::get('search',['as' => 'search', 'uses' => 'ProductController@search']);
Route::get('search-ajax',['as' => 'search.ajax', 'uses' => 'ProductController@searchAjax']);
Route::get('search-advanced',['as' => 'seach.advanced', 'uses' => 'ProductController@searchAdvanced']);
