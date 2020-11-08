<?php

use Admin\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::get('/home', [AdminController::class, 'home'])->name('admin.home');
//Route::get('/index', fn() => view('admin::index'));
Route::get('/index', [AdminController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index2']);
//Route::get('/admin', fn() => view('admin::admincreate'));
Route::post('/create1', [UserController::class, 'createNewUser']);
Route::get('/create', fn() => view('admin::createUser'));


 /* Route::post('/create1', function(){
    //dd(request()->input('email'));
    /* $data=[
            'email' => request()->input(‘email’),
            'password' => 'advs78932',
             'name'=> request()->input('name'),
    
         ]; */
         /* DB::insert('insert into users (name, email,password) values (?, ?, ?)', [
            $request->input('name'), $request->input(‘email’), 'Dayle'
             ]);
}); */ 