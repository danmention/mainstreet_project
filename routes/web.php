<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');


Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'users'], function () {
        Route::post('/add-admin-user', 'ApiController@add_admin_user');
        Route::post('/edit-admin-user', 'ApiController@edit_admin_user');
    });

    Route::group(['prefix' => 'branch'], function () {
        Route::post('/edit', 'ApiController@edit_branch');
        Route::post('/edit-admin-user', 'ApiController@edit_admin_user');
    });

    Route::group(['prefix'=>'loans'], function() {
        Route::post('/add', 'ApiController@add_loan');
    });
});


Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
    Route::get('/login', 'AuthController@login')->name('login-page');
    Route::post('/login', 'AuthController@postLogin')->name('login');
    Route::get('/logout', 'AuthController@logout')->name('logout');

    Route::get('/register', 'AuthController@register')->name('register-page');
    Route::post('/register', 'AuthController@postRegistration')->name('register');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth:admin']], function () {
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'UsersController@index')->name('admin.getusers');
        Route::get('/add', 'UsersController@add')->name('users.add');
        Route::get('/edit/{id}', 'UsersController@edit')->name('users.edit');
        Route::post('/create', 'UsersController@store')->name('users.store');
    });

    // branch routes
    Route::group(['prefix' => 'branch'], function () {
        Route::get('/', 'BranchController@index')->name('branch.getusers');
        Route::get('/add', 'BranchController@add')->name('branch.add');
        Route::post('/create', 'BranchController@store')->name('branch.store');
        Route::get('/edit/{id}', 'BranchController@edit')->name('branch.edit');
    });

    // loans
    Route::group(['prefix' => 'loans', 'as' => 'loans.'], function () {

        Route::get('/', 'LoansController@index')->name('index');
        Route::get('/add', 'LoansController@add')->name('add');
        Route::get('/edit/{id}', 'LoansController@edit')->name('edit');
        Route::post('/', 'LoansController@store')->name('store');


        Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
            Route::get('/', 'LoanProductController@index')->name('index');
            Route::get('/add', 'LoanProductController@add')->name('add');
            Route::get('/{id}', 'LoanProductController@show')->name('show');
            Route::post('/', 'LoanProductController@store')->name('store');
        });
    });

});

