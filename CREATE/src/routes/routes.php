<?php

Route::group(['prefix' => 'rasio-guru-murid-smp-mts', 'middleware' => ['web']], function() {

    $controllers = (object) [
        'index'     => 'Bantenprov\RasioGMSmpMts\Http\Controllers\RasioGMSmpMtsController@index',
        'create'     => 'Bantenprov\RasioGMSmpMts\Http\Controllers\RasioGMSmpMtsController@create',
        'store'     => 'Bantenprov\RasioGMSmpMts\Http\Controllers\RasioGMSmpMtsController@store',
        'show'      => 'Bantenprov\RasioGMSmpMts\Http\Controllers\RasioGMSmpMtsController@show',
        'update'    => 'Bantenprov\RasioGMSmpMts\Http\Controllers\RasioGMSmpMtsController@update',
        'destroy'   => 'Bantenprov\RasioGMSmpMts\Http\Controllers\RasioGMSmpMtsController@destroy',
    ];

    Route::get('/',$controllers->index)->name('rasio-guru-murid-smp-mts.index');
    Route::get('/create',$controllers->create)->name('rasio-guru-murid-smp-mts.create');
    Route::post('/store',$controllers->store)->name('rasio-guru-murid-smp-mts.store');
    Route::get('/{id}',$controllers->show)->name('rasio-guru-murid-smp-mts.show');
    Route::put('/{id}/update',$controllers->update)->name('rasio-guru-murid-smp-mts.update');
    Route::post('/{id}/delete',$controllers->destroy)->name('rasio-guru-murid-smp-mts.destroy');

});

