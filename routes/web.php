<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group( function(){
    Route::get('/{id}/{name}', function ($id, $name) {
        return  sprintf("用户名：%s, 编号：%s", $name, $id);
    })->name('user.info');
});

Route::prefix('task')->group( function(){
    Route::get('/', 'TaskController@home');

    Route::delete('/{id}', function($id){
        return "Delete Task " . $id;
    })->name('task.delete');
});



Route::fallback(function(){
    return '我是最后的屏障';
});
