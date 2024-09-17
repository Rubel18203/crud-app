<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/showdata', [CrudController::class, 'showdata']);
Route::get('/add_data', [CrudController::class, 'add_data']);
Route::post('/store_data', [CrudController::class, 'storedata']);
Route::get('/editdata/{id}', [CrudController::class, 'editdata']);
Route::get('/updatedata/{id}', [CrudController::class, 'updatedata']);
Route::get('/delect_data/{id}', [CrudController::class, 'delectdata']);
