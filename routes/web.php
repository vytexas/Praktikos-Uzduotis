<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\PageController@index');

Route::group(['middleware' => ['auth', 'admin']], function() {

    Route::get('/sukurti-uzduoti', 'App\Http\Controllers\PageController@createTaskPage');

    Route::post('/add-device', 'App\Http\Controllers\TaskController@createTask');

    Route::get('/uzduociu-valdymas', 'App\Http\Controllers\PageController@taskControlPage');

    Route::get('/uzduociu-valdymas/istrinti-uzduoti/{id}', 'App\Http\Controllers\TaskController@deleteTask');

    Route::get('/uzduociu-valdymas/redaguoti-uzduoti/{id}', 'App\Http\Controllers\PageController@editTaskPage');

    Route::post('/uzduociu-valdymas/redaguoti-uzduoti/edit-device/{id}', 'App\Http\Controllers\TaskController@editTask');

});

Route::group(['middleware' => ['auth', 'user']], function() {

    Route::get('/mano-uzduotys', 'App\Http\Controllers\PageController@myTask');

    Route::get('/uzduociu-valdymas/atlikta/{id}', 'App\Http\Controllers\TaskController@completeTask');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
