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
        Route::put('/agent/update/profile', 'AgentController@agentUpdateProfile')->name('agent.update.profile');

        Route::put('/agent/change/password',
//            dd('testing');
        'AgentController@agentChangePassword')->name('agent.change.password');


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

    Route::get('/agent/forgot/password', 'AuthAgentController@forgotPassword')->defaults('_config', [
        'view' => 'agent::auth.forgot-password'
    ])->name('agent.auth.forgot');

    Route::get('/agent/password/reset', 'AuthAgentController@passwordReset')->defaults('_config', [
        'view' => 'agent::auth.password-reset'
    ])->name('agent.auth.reset');

});
