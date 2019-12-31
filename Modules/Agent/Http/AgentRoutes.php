<?php

Route::group(['namespace' => 'Edaacil\Modules\Agent\Http\Controllers'], function () {

    // MANAGER MIDDLEWARE ROUTE
    Route::group(['middleware' => ['auth', 'agent']], function () {

        Route::get('/agent', 'AgentController@dashboard')->defaults('_config', [
            'view' => 'agent::dashboard'
        ])->name('agent.dashboard.view');

        Route::get('/agent/profile', 'AgentController@profile')->defaults('_config', [
            'view' => 'agent::data.profile'
        ])->name('agent.data.profile');

        Route::get('/agent/certificate', 'CertificateController@certificate')->defaults('_config', [
            'view' => 'agent::certificate.index'
        ])->name('agent.certificate.index');

        Route::post('/agent/certificate/issue', 'CertificateController@certificateIssue')->name('agent.certificate.issue');

        Route::get('/agent/logout', 'AuthAgentController@agentLogout')->name('agent.auth.logout');

    });

    // Auth Controller For Agent
    Route::get('/agent/login', 'AuthAgentController@index')->defaults('_config', [
        'view' => 'agent::auth.login'
    ])->name('agent.auth.view');

    Route::post('/agent/login', 'AuthAgentController@agentLogin')->name('agent.auth.login');

});
