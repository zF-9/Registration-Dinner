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
use App\list_name;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/regist', function () {
    //return view('datatable');
    $penama = DB::table('list_names')->get();
    //dd($penama);

    return view('tables', ['penama' => $penama]);    
})->name('registration');

Route::get('/insert', function () {
    return view('login');
});

Route::post('/add', 'FunctionController@addNama');

Route::post('/trytest', 'FunctionController@attend'); //post

Route::get('/confirmation', function () {
    //return view('datatable');
    $penama = DB::table('list_names')->get();

    //dd($penama);
    return view('tables', ['penama' => $penama]);    
});

Route::get('/check', 'FunctionController@Update');
