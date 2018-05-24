<?php
$namespace = 'App\Modules\frameList\Controllers';
Route::group(
    ['module'=>'frameList', 'namespace' => $namespace],
    function() {
        Route::get('frameList', [
            # middle here
            'as' => 'index',
            'uses' => 'frameListController@index'
        ]);
    }
);