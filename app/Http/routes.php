<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */


Route::get('/login', ['middleware' => 'guest', function() {
return view('backend.login');
}]);
Route::get('/', ['middleware' => 'guest', function() {
return view('backend.login');
}]);

Route::post('/login', 'LoginController@auth');
Route::get('/logout', 'LoginController@logout');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', function() {
        return view('backend.dashboard');
    });
        
    Route::get('/datadinamis', ['as' => 'admin.dashboard.datadinamis', function() {
    return view('backend.datadinamis');
}]);

    Route::get('/lembaga', ['as' => 'admin.dashboard.lembaga', function() {
    return view('backend.lembaga');
}]);
    Route::resource('datastatis', 'Admin\DataStatisController');
   
    
    Route::resource('jurusan', 'Admin\jurusanController');
    Route::resource('jurusan/{id}/mahasiswa', 'Admin\mahasiswaController');
    Route::resource('pegawai', 'Admin\PegawaiController');
    Route::resource('persyaratan', 'Admin\persyaratanController');
    Route::resource('upload', 'Admin\UploadController');
    Route::post('upload/update', 'Admin\UploadController@updateFile');
    Route::post('persyaratan/create', ['as' => 'admin.persyaratan.create', 'uses' => 'Admin\persyaratanController@create']);
    Route::post('persyaratan/show', ['as' => 'admin.persyaratan.show', 'uses' => 'Admin\persyaratanController@show']);


});

Route::group(['prefix' => 'guru','middleware' => 'auth'], function() {
    Route::get('/', function() {
        return view('guru.dashboard');
    });
    
    Route::resource('upload', 'Admin\UploadController');
    Route::resource('persyaratan', 'Admin\persyaratanController');
    Route::get('pegawai/{id}', ['as' => 'guru.pegawai.edit', 'uses' => 'Admin\PegawaiController@edit']);
    Route::put('pegawai/{id}', ['as' => 'guru.pegawai.update', 'uses' => 'Admin\PegawaiController@update']);
    Route::post('persyaratan/create', ['as' => 'guru.persyaratan.create', 'uses' => 'Admin\persyaratanController@create']);
    Route::post('persyaratan/show', ['as' => 'guru.persyaratan.show', 'uses' => 'Admin\persyaratanController@show']);
});

Route::group(['prefix' => 'api'], function() {
    Route::get('datastatis', 'Admin\DataStatisController@apiDataStatis');
    Route::get('datastatis/{id}', 'Admin\DataStatisController@show');
    Route::get('menu', 'Admin\DataStatisController@apiCreateMenu');

    Route::get('jurusan', 'Admin\jurusanController@apijurusan');
    Route::get('jurusan/{id}', 'Admin\jurusanController@show');

    Route::get('jurusan/{id}/mahasiswa', 'Admin\mahasiswaController@apimahasiswa');
    Route::get('mahasiswa/{id}', 'Admin\mahasiswaController@show');
    Route::get('jurusandropdown', 'Admin\jurusanController@apiCreatejurusan');

    Route::get('pegawai', 'Admin\PegawaiController@apiPegawai');
    Route::get('pegawai/{id}', 'Admin\PegawaiController@show');

    Route::get('persyaratan', 'Admin\persyaratanController@apipersyaratan');
    Route::get('persyaratan/{id}', 'Admin\persyaratanController@apipersyaratan');

    Route::get('upload', 'Admin\UploadController@apiUpload');
    Route::get('upload/{id}', 'Admin\UploadController@apiUpload');
});
