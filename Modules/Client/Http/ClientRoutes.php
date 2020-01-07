<?php

Route::group(['namespace' => 'Edaacil\Modules\Client\Http\Controllers'], function () {

        Route::get('/', 'ClientController@index')->defaults('_config', [
            'view' => 'client::index'
        ])->name('client.index');

});