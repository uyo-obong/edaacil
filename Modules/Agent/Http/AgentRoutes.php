<?php

Route::group(['namespace' => 'Edaacil\Modules\Agent\Http\Controllers'], function () {

    // Auth Controller For Agent
    Route::get('/agent/login', 'AuthAgentController@index')->defaults('_config', [
        'view' => 'agent::auth.login'
    ])->name('agent.auth.view');

});
