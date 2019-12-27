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

        Route::post('/manager/account/create','AccountController@createAgentAccount')->name('manager.account.create.agent');
        Route::post('/manager/account/update', 'AccountController@updateAgentAccount')->name('manager.account.update.agent');

        // Manage Token
        Route::get('/manager/token/list', 'TokenController@list')->defaults('_config', [
            'view' => 'manager::token.list'
        ])->name('manager.token.list');

        Route::post('/manager/token/generate', 'TokenController@createToken')->name('manager.token.generate');

        // Manage Logout
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
