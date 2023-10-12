<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function (){
    return view ('welcome');
});

Route::get('/formulario', function (){
    return view ('formulario');
});

Route::get('/recuerdos', function (){
    return view ('recuerdos');
}); */

Route::view('/', 'welcome')->name('apodoinicio');

Route::get('/v1', function (){
    return view ('vista1');
});

