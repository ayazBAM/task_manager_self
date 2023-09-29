<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/create-task', function () {
    return view('create_task');
});

Route::controller(TaskController::class)->group(function(){
    Route::get('/', 'showTasks');
    Route::post('/create-task','CreateTask');
    Route::get('/view-task/{id}', 'viewTask');
    Route::post('/update-task/{id}', 'UpdateTask');
    Route::get('/delete-task/{id}', 'DeleteTask');
});