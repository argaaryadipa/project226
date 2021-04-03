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

// routing default

use App\Http\Controllers\BioArgaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function (){
    echo 'Mahasiswa';
});

Route::get('/ubg/ilkom/mahasiswa', function (){
    return 'Mahasiswa Ilkom Kampus UBG';
});


// routing dengan parameter
Route::get('/ubg/ilkom/mahasiswa/{semester}/{nim}', function ($semester, $nim){
    return 'Mahasiswa Ilkom Kampus UBG Semester : ' . $semester . '-NIM : ' . $nim;
});


// route redirect
Route::redirect('/login', '/masuk');


// route group
Route::group(['prefix' => '/admin'], function() {
    Route::get('/mahasiswa', function(){
        return 'Admin Mahasiswa';
    });
    Route::get('/dosen', function(){
        return 'Admin Dosen';
    });
    Route::get('/staf', function(){
        return 'Admin Staf';
    });
});


Route::get('/', function () {
    return view('welcome');
})-> name('home');

Route::get('/portofolio-saya', function () {
    return view('profile');
})-> name('porto');

Route::get('/identitas-saya', 'BioArgaController@index')-> name('iden');
