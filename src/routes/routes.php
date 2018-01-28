<?php

Route::group(['prefix' => 'laju-inflasi-pengeluaran', 'middleware' => ['web']], function() {

    $controllers = (object) [
        'index'     => 'Bantenprov\LajuInflasiPengeluaran\Http\Controllers\LajuInflasiPengeluaranController@index',
        'create'     => 'Bantenprov\LajuInflasiPengeluaran\Http\Controllers\LajuInflasiPengeluaranController@create',
        'store'     => 'Bantenprov\LajuInflasiPengeluaran\Http\Controllers\LajuInflasiPengeluaranController@store',
        'show'      => 'Bantenprov\LajuInflasiPengeluaran\Http\Controllers\LajuInflasiPengeluaranController@show',
        'update'    => 'Bantenprov\LajuInflasiPengeluaran\Http\Controllers\LajuInflasiPengeluaranController@update',
        'destroy'   => 'Bantenprov\LajuInflasiPengeluaran\Http\Controllers\LajuInflasiPengeluaranController@destroy',
    ];

    Route::get('/',$controllers->index)->name('laju-inflasi-pengeluaran.index');
    Route::get('/create',$controllers->create)->name('laju-inflasi-pengeluaran.create');
    Route::post('/store',$controllers->store)->name('laju-inflasi-pengeluaran.store');
    Route::get('/{id}',$controllers->show)->name('laju-inflasi-pengeluaran.show');
    Route::put('/{id}/update',$controllers->update)->name('laju-inflasi-pengeluaran.update');
    Route::post('/{id}/delete',$controllers->destroy)->name('laju-inflasi-pengeluaran.destroy');

});

