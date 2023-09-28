<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/create-task', function () {
    return view('create_task');
});

Route::get('/view-task', function () {
    return view('view');
});