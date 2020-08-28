<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view('welcome');

});

Route::get('show','Postcontroller@index');

Route::get('anydata','Postcontroller@anydata')->name('datatables.data');

Route::get('index','Postcontroller@datatable')->name('datatable');
