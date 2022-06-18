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

Route::get('/', function () {
    return view('welcome');
});

Route::group([],function(){

    //admins routes
    Route::get('/admin',function(){
        return view('admins.dashboard');
    })->name('dashboard');

    Route::resource('client','ClientController');
    Route::resource('l2','L2Controller');
    Route::resource('l3','L3Controller');
    Route::resource('utilisateur','UtilisateurController');


});


