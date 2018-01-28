<?php

Route::group(['prefix' => 'li-pengeluaran', 'middleware' => ['web']], function() {

    $controllers = (object) [
        'index'     => 'Bantenprov\LIPengeluaran\Http\Controllers\LIPengeluaranController@index',
        'create'     => 'Bantenprov\LIPengeluaran\Http\Controllers\LIPengeluaranController@create',
        'store'     => 'Bantenprov\LIPengeluaran\Http\Controllers\LIPengeluaranController@store',
        'show'      => 'Bantenprov\LIPengeluaran\Http\Controllers\LIPengeluaranController@show',
        'update'    => 'Bantenprov\LIPengeluaran\Http\Controllers\LIPengeluaranController@update',
        'destroy'   => 'Bantenprov\LIPengeluaran\Http\Controllers\LIPengeluaranController@destroy',
    ];

    Route::get('/',$controllers->index)->name('li-pengeluaran.index');
    Route::get('/create',$controllers->create)->name('li-pengeluaran.create');
    Route::post('/store',$controllers->store)->name('li-pengeluaran.store');
    Route::get('/{id}',$controllers->show)->name('li-pengeluaran.show');
    Route::put('/{id}/update',$controllers->update)->name('li-pengeluaran.update');
    Route::post('/{id}/delete',$controllers->destroy)->name('li-pengeluaran.destroy');

});

