<?php

Route::group(['namespace' => 'Edaacil\Modules\Agent\Http\Controllers'], function () {

    Route::get('/agent', 'AgentController@dashboard')->defaults('_config', [
        'view' => 'agent::dashboard'
    ])->name('agent.dashboard.view');


    Route::get('/agent/certificate', 'AgentController@index')->defaults('_config', [
        'view' => 'agent::certificate.index'
    ])->name('agent.certificate.index');

    // Auth Controller For Agent
    Route::get('/agent/login', 'AuthAgentController@index')->defaults('_config', [
        'view' => 'agent::auth.login'
    ])->name('agent.auth.view');

});
