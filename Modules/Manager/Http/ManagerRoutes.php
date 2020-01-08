<?php

Route::group(['namespace' => 'Edaacil\Modules\Manager\Http\Controllers'], function () {

    // MANAGER MIDDLEWARE ROUTE
    Route::group(['middleware' => ['auth', 'manager']], function ()  {

        Route::get('/manager', 'ManagerController@dashboard')->defaults('_config', [
            'view' => 'manager::dashboard'
        ])->name('manager.dashboard.view');

        // Manage Account
        Route::get('/manager/account/list', 'AccountController@list')->defaults('_config', [
            'view' => 'manager::account.list'
        ])->name('manager.account.list');

        Route::get('/manager/account/profile', 'AccountController@profile')->defaults('_config', [
            'view' => 'manager::account.profile'
        ])->name('manager.account.profile');


        Route::get('/manager/account/edit/profile', 'AccountController@editProfile')->defaults('_config', [
            'view' => 'manager::account.edit_profile'
        ])->name('manager.account.edit.profile');

        Route::post('/manager/account/create','AccountController@createAccount')->name('manager.account.create.agent');
        Route::put('/manager/account/update', 'AccountController@updateAccount')->name('manager.account.update');
        Route::put('/manager/account/manager/update/profile','AccountController@updateManagerInformation')->name('manager.account.manager.update.profile');

        Route::put('/manager/account/manager/change/password', 'AccountController@managerChangePassword')->name('manager.account.manager.change.password');


        // Manage Token
        Route::get('/manager/token/list', 'TokenController@list')->defaults('_config', [
            'view' => 'manager::token.list'
        ])->name('manager.token.list');

        Route::post('/manager/token/generate', 'TokenController@createToken')->name('manager.token.generate');

        Route::delete('/manager/token/{tokenId}/delete', 'TokenController@deleteToken')->name('manager.token.delete');

        // Manage Logout
        Route::get('/manager/logout', 'AuthController@managerLogout')->name('manager.auth.logout');

    });

// Auth Controller
    Route::get('/manager/login', 'AuthController@index')->defaults('_config', [
        'view' => 'manager::auth.login'
    ])->name('manager.auth.view');
    Route::post('/manager/login', 'AuthController@managerLogin')->name('manager.auth.login');




});
