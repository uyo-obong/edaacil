<?php

Route::group(['namespace' => 'Edaacil\Modules\Agent\Http\Controllers'], function () {

    Route::get('/agent', 'AgentController@dashboard')->defaults('_config', [
        'view' => 'agent::dashboard'
    ])->name('agent.dashboard.view');

    // Auth Controller For Agent
    Route::get('/agent/login', 'AuthAgentController@index')->defaults('_config', [
        'view' => 'agent::auth.login'
    ])->name('agent.auth.view');

});
