<?php

use Illuminate\Support\Facades\Route;
use LazyHub\LazyadminLaravel\Facades\LazyAdmin;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function (){
    LazyAdmin::testMethod();
});
