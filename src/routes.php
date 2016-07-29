<?php
Route::group(
    array(
        'prefix' => 'brototype',
        'namespace' => 'Mutualofomaha\Brototype\Controllers'
    ),
    function () {
//        Route::controller('/', 'BrototypeController');
        Route::any('/', 'BrototypeController@anyIndex');
        Route::any('/a', 'BrototypeController@anyA');
        Route::any('/b', 'BrototypeController@anyB');
        Route::any('/c', 'BrototypeController@anyC');
        Route::any('/d', 'BrototypeController@andD');
    }
);
