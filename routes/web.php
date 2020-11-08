<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Crime_reportController;
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



Route::get('/home', function () {
    //dd(\Illuminate\Support\Facades\Auth::user());
    return view('home');
})->middleware(['auth', 'verified']);


// Route::get('/index', [Crime_reportController::class, 'index']);
Route::post('/crimecreate', [Crime_reportController::class, 'create']);
Route::get('/crimehome', fn() => view('general.crimeChome'));
Route::get('/newcrime', fn() => view('general.logComplaint'));
Route::get('/general', fn() => view('general.general'));
Route::get('/trackcrime', [Crime_reportController::class, 'track']);
Route::get('/crimeadmin', [Crime_reportController::class, 'admin']);
//Route::get('/crimehome', [Crime_reportController::class, 'crimehome']);
//Route::get('{id}', 'crime_reportController@edit')->name('edit');
Route::get('/assign/{id}',[Crime_reportController::class, 'show']);
Route::get('crimeassign',fn() => view('general.crimeAssign'));
Route::get('/searchauth', [Crime_reportController::class, 'searchauth']);
Route::post('/assignauth', [Crime_reportController::class, 'assignauth']);
