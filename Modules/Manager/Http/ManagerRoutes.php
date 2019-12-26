<?php

Route::group(['namespace' => 'Edaacil\Modules\Manager\Http\Controllers'], function () {

    // MANAGER MIDDLEWARE ROUTE
    Route::group(['middleware' => ['auth', 'manager']], function ()  {

        Route::get('/manager', 'ManagerController@dashboard')->defaults('_config', [
            'view' => 'manager::dashboard'
        ])->name('manager.dashboard.view');

        Route::get('/manager/account/list', 'AccountController@list')->defaults('_config', [
            'view' => 'manager::account.list'
        ])->name('manager.account.list');

        Route::get('/manager/token/list', 'TokenController@list')->defaults('_config', [
            'view' => 'manager::token.list'
        ])->name('manager.token.list');

        Route::get('/manager/logout', 'AuthController@managerLogout')->defaults('_config', [
            'view' => 'manager::auth.login'
        ])->name('manager.auth.logout');

    });

// Auth Controller
    Route::get('/manager/login', 'AuthController@index')->defaults('_config', [
        'view' => 'manager::auth.login'
    ])->name('manager.auth.view')->middleware('web');
    Route::post('/manager/login', 'AuthController@managerLogin')->name('manager.auth.login');

});
