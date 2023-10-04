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

Route::view('/formulario', 'formulario')->name('apodoformulario');

Route::view('/recuerdos', 'recuerdos')->name('apodoRecuerdos');

