<?php

/**
 * Register CMS routes before all user routes.
 */
App::before(function ($request) {

    Route::any('/', function() {
        return redirect( Config::get('cms.backendUri', 'admin') );
    });

});
