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
    return view('Auths.login');
});

Route::get('/login','SiswaController@login')->name('login');
Route::post('/postlogin','SiswaController@postlogin');
Route::get('/logout','SiswaController@logout');

Route::group(['middleware'=>['auth','CheckRole:Admin']],function(){

    Route::get('/user','UserController@index');
    Route::post('/user/create','UserController@create');
    Route::get('/user/{id}/edit','UserController@edit');
    Route::post('/user/{id}/update','UserController@update');
    Route::get('/user/{id}/delete','UserController@delete');
    Route::get('/user/{id}/profile','UserController@profile');
    Route::get('/ganti/password','UserController@ganti_password');
    

    

    Route::get('/maklon', 'MaklonController@index');
    Route::get('/maklon/create','MaklonController@create');
    Route::post('/maklon/store','MaklonController@store');
    Route::post('/maklon/createInPkp','MaklonController@createInPkp');
    Route::get('/maklon/{id}/delete', 'MaklonController@delete');
    Route::get('/maklon/{id}/edit', 'MaklonController@edit');
    Route::post('/maklon/{id}/update', 'MaklonController@update');
    Route::get('/maklon/{id}/lihat', 'MaklonController@lihat');
    Route::get('/maklon/{id}/profile','MaklonController@profile');
    Route::get('/brand', 'BrandController@index');
    Route::post('/brand/create', 'BrandController@create');
    Route::get('/brand/{id}/delete', 'BrandController@delete');
    //pages
    
});

Route::group(['middleware'=>['auth','CheckRole:Admin,PV,Legal,QA,GP']],function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/dokumen','MaklonController@dokumen');
    Route::get('/harga','MaklonController@harga');
    Route::get('/trial','MaklonController@trial');
    Route::get('/review','MaklonController@review');
    Route::get('/halal','MaklonController@halal');
    Route::get('/kontak','MaklonController@kontak');

});

Route::group(['middleware'=>['auth','CheckRole:Admin,PV']],function(){
    Route::get('/project', 'ProjectController@index');
    Route::get('/project/create','ProjectController@create');
    Route::post('/project/store','ProjectController@store');
    Route::get('/project/{id}/info', 'ProjectController@info');
    Route::get('/project/{id}/maklon', 'ProjectController@info_maklon');
    Route::get('/project/{id}/{maklon_id}/releted', 'ProjectController@info_releted');
    Route::get('/project/{id}/{maklon_id}/legalitas', 'ProjectController@info_legalitas');
    Route::get('/project/{id}/{maklon_id}/mou', 'ProjectController@info_mou');
    Route::get('/project/{id}/{maklon_id}/trial', 'ProjectController@info_trial');
    Route::get('/project/{id}/{maklon_sementara}/pendukung', 'ProjectController@info_pendukung');
    Route::get('/project/{id}/{maklon_id}/lainnya', 'ProjectController@info_lainnya');
    Route::get('/project/{id}/detail', 'ProjectController@detail');
    Route::post('/project/info/create','ProjectController@createReleted');
    Route::post('/project/info/maklon','ProjectController@createMaklon');
    Route::post('/project/info/legalitas','ProjectController@legalitas');
    Route::post('/project/info/mou','ProjectController@mou');
    Route::post('/project/info/pendukung','ProjectController@pendukung');
    Route::get('/project/{id}/delete', 'ProjectController@delete');
    Route::get('/project/{id}/edit', 'ProjectController@edit');
    Route::post('/project/{id}/update', 'ProjectController@update');
    Route::get('/project/{id}/{id2}/deleteMaklon', 'ProjectController@deleteMaklon');

    // Session Maklon
    Route::get('/show-maklon/{id}', 'ProjectController@showMaklon');
    Route::post('/project/maklon/save', 'ProjectController@saveMaklon')->name('maklon-save');

});