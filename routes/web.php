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

Route::group(['middleware'=>['auth','CheckRole:Admin,PV,Legal,RND,QA,NR,GP']],function(){

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
    Route::get('/maklon/trash', 'MaklonController@trash');
    Route::get('maklon/trash/{id}/kembalikan','MaklonController@restore');


    //pages

});

Route::group(['middleware'=>['auth','CheckRole:Admin,PV,Legal,RND,QA,NR,GP,PRO']],function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/dashboard/{id}/{maklon_id}/detail','DashboardController@detail');
    Route::get('/dokumen','MaklonController@dokumen');
    Route::get('/harga','MaklonController@harga');
    Route::get('/trial','MaklonController@trial');
    Route::get('/review','MaklonController@review');
    Route::get('/halal','MaklonController@halal');
    Route::get('/kontak','MaklonController@kontak');

});

Route::group(['middleware'=>['auth','CheckRole:Admin,PV,Legal,RND,QA,NR,GP']],function(){
    Route::get('/holdproject/{id}', 'StatusController@holdProject');
    Route::get('/unholdproject/{id}', 'StatusController@unholdProject');
    Route::get('/dropproject/{id}', 'StatusController@dropProject');
    Route::get('/undropproject/{id}', 'StatusController@undropProject');
    Route::get('/approveproject/{id}', 'StatusController@approveProject');
    Route::get('/approvepenawaran/{id}', 'StatusController@approvePenawaran');
    Route::get('/approvelegal/{id}', 'StatusController@approveLegal');
    Route::get('/approvefoodsafe/{id}', 'StatusController@approveFoodsafe');
    Route::get('/projectdone/{id}', 'StatusController@projectDone');
    Route::post('/notapprove/{id}', 'StatusController@notapproveProject');

});


Route::group(['middleware'=>['auth','CheckRole:Admin,PV,Legal,RND,QA,NR,GP']],function(){

    Route::get('/project', 'ProjectController@index');
    Route::get('/project/{$id}','ProjectController@idpkp');
    // Route::get('/project/detail/{$id}','ProjectController@detailpkp');
    Route::get('/project/{id}/detail', 'ProjectController@view');
    Route::post('/createmaklon','ProjectController@create_maklon');
    Route::get('/project/create','ProjectController@create');
    Route::post('/project/store','ProjectController@store');
    Route::get('/project/{id}/info', 'ProjectController@info');
    Route::get('/project/{id}/maklon', 'ProjectController@info_maklon');
    Route::get('/project/{id}/edit', 'ProjectController@edit');
    Route::get('/project/{id}/detail','ProjectController@details');
    Route::get('/project/{id}/{maklon_id}/releted', 'ProjectController@info_releted');
    Route::get('/project/{id}/{maklon_id}/penawaran', 'ProjectController@info_penawaran');
    Route::get('/project/{id}/{maklon_id}/legalitas', 'LegalitasController@info_legalitas');
    Route::post('/project/info/review/{id}','LegalitasController@review');
    // Route::get('/project/{id}/{maklon_id}/legalitas', function($id, $maklon_id) {
    //     return "wayoo ";
    // });
    Route::get('/project/{id}/{maklon_id}/mou', 'ProjectController@info_mou');
    Route::get('/project/{id}/{maklon_id}/trial', 'ProjectController@info_trial');
    Route::get('/project/{id}/{maklon_id}/foodsafe', 'ProjectController@info_foodsafety');
    Route::get('/project/{id}/{maklon_id}/approval', 'ProjectController@info_approval');
    Route::get('/project/{id}/{maklon_id}/pendukung', 'ProjectController@info_pendukung');
    Route::get('/project/{id}/{maklon_id}/delete', 'ProjectController@destroy_pendukung');
    Route::get('/project/{id}/{maklon_id}/kontrak', 'ProjectController@info_kontrak');
    // Route::get('/project/{id}/detail', 'ProjectController@detail');
    Route::post('/project/info/create','ProjectController@createReleted');

    Route::put('/project/{maklon_id}/updatereleted', 'ProjectController@updateReleted');

    Route::post('/project/info/maklon','ProjectController@createMaklon');
    Route::post('/project/info/{id}/penawaran','ProjectController@penawaran');
    Route::post('/project/info/legalitas/{id}/{maklon_id}','LegalitasController@legalitas');
    Route::post('/project/info/mou','ProjectController@mou');
    // Route::post('/project/info/pendukung','ProjectController@pendukung');
    Route::post('/project/info/foodsafety','ProjectController@foodsafety');
    Route::post('/project/info/fhs','ProjectController@fhs');
    Route::post('/project/info/audit','ProjectController@info_audit');
    Route::post('/project/info/kontrakkerjasama/{maklon_id}/{project_id}','ProjectController@kontrak_kerjasama');
    Route::post('/project/trial','ProjectController@trial');
    Route::get('/project/{id}/legalitasdelete', 'ProjectController@deletelegal');
    Route::get('/project/moudelete/{id}', 'ProjectController@delete_mou');
    Route::get('/project/{id}', 'ProjectController@index');
    Route::get('/project/{id}/releted/delete', 'ProjectController@deletereleted');
    Route::get('/project/{id}/delete', 'ProjectController@delete');
    Route::get('/project/{id}/edit', 'ProjectController@edit');
    Route::post ('/project/penjajakan/{id}/update', 'ProjectController@updateReleted');
    Route::post ('/project/{id}/updatelegal', 'LegalitasController@update_legal');
    Route::post('/project/{id}/update', 'ProjectController@update');
    Route::get('/project/{id}/{id2}/deleteMaklon', 'ProjectController@deleteMaklon');

    Route::get('/hold', 'PkpagesController@hold');
    Route::get('/done', 'PkpagesController@done');
    Route::get('/rejected', 'PkpagesController@rejected');
    Route::get('/approve', 'PkpagesController@approve');
    Route::get('/inactive', 'PkpagesController@inactive');
    Route::get('/penawaranapprove', 'PkpagesController@penawaran_approve');

    Route::get('/Akta/{id}', 'LegalitasController@StatusAktaPendirian');
    Route::get('/penyesuaian/{id}', 'LegalitasController@StatusPenyesuaian');
    Route::get('/susunan/{id}', 'LegalitasController@StatusSusunanDireksi');
    Route::get('/wewenang/{id}', 'LegalitasController@StatusWewenangDireksi');
    Route::get('/siup/{id}', 'LegalitasController@StatusSiup');
    Route::get('/nib/{id}', 'LegalitasController@StatusNib');
    Route::get('/tdp/{id}', 'LegalitasController@StatusTdp');
    Route::get('/iui/{id}', 'LegalitasController@StatusIui');
    Route::get('/npwp/{id}', 'LegalitasController@StatusNpwp');
    Route::get('/izindomisili/{id}', 'LegalitasController@StatusDomisili');
    Route::get('/izinlingkungan/{id}', 'LegalitasController@StatusLingkungan');
    Route::get('/aktapengurus/{id}', 'LegalitasController@StatusAktaPengurus');
    Route::get('/ktp/{id}', 'LegalitasController@StatusKtp');
    Route::get('/psb/{id}', 'LegalitasController@StatusPsb');
    Route::get('/iumk/{id}', 'LegalitasController@StatusIumk');
    Route::get('/amdal/{id}', 'LegalitasController@StatusAmdal');
    Route::get('/sppk/{id}', 'LegalitasController@StatusSppk');
    Route::get('/finaltrial/{id}', 'StatusController@finalTrial');







    // Session Maklon
    Route::get('/show-maklon/{id}', 'ProjectController@showMaklon');
    Route::post('/project/maklon/save', 'ProjectController@saveMaklon')->name('maklon-save');
    // Email related routes

        Route::get('/notify','MailController@notify_email')->name('notifyPenjajakan');

        Route::get('/api', 'ProdevController@getData');
});
