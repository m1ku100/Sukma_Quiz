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

Route::get('/login', 'AuthController@login')->name('login');
Route::get('/loginguru', 'AuthguruController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth', 'CheckRole:admin, guru ,siswa']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/nilai2', 'NilaiController@index2');
});

Route::group(['middleware' => ['auth', 'CheckRole:admin']], function () {
    Route::get('/siswa', 'SiswaController@index');
    Route::post('/siswa/create', 'SiswaController@create');
    Route::get('/siswa/{id}/edit', 'SiswaController@edit');
    Route::post('/siswa/{id}/update', 'SiswaController@update');
    Route::get('/siswa/{id}/delete', 'SiswaController@delete');
    Route::get('/siswa/{id}/profile', 'SiswaController@profile');
//Route::post('/siswa/import','SiswaController@importexcel')->name('siswa.import');
    Route::get('/kerjakan', 'SoalController@kerjakan');
    Route::get('/soal/jawab', 'SoalController@jawab');
//Route::post('/kerjakan/simpan_jawaban','SoalController@simpan_jawaban');

    Route::get('/guru', 'GuruController@index');
    Route::post('/guru/create', 'GuruController@create');
    Route::get('/guru/{id}/edit', 'GuruController@edit');
    Route::post('/guru/{id}/update', 'GuruController@update');
    Route::get('/guru/{id}/delete', 'GuruController@delete');
    Route::get('/guru/{id}/profile', 'GuruController@profile');
//Route::post('/guru/import','GuruController@importexcel')->name('guru.import');

    Route::get('/soal', 'SoalController@index');
    Route::post('/soal/create', 'SoalController@create');
    Route::get('/soal/{id}/edit', 'SoalController@edit');
    Route::post('/soal/{id}/update', 'SoalController@update');
    Route::get('/soal/{id}/delete', 'SoalController@delete');
//Route::post('/soal/import','SoalController@importexcel')->name('soal.import');

    Route::get('/mapel', 'MapelController@index');
    Route::post('/mapel/create', 'MapelController@create');
    Route::get('/mapel/{id}/edit', 'MapelController@edit');
    Route::post('/mapel/{id}/update', 'MapelController@update');
    Route::get('/mapel/{id}/delete', 'MapelController@delete');
    Route::get('/seluruhnilai', 'NilaiController@index2');

//Route::get('/kelas','KelasController@index');

    Route::get('/token', 'TokenController@index');
    Route::post('/token/create', 'TokenController@create');
    Route::get('/token/{id}/edit', 'TokenController@edit');
    Route::post('/token/{id}/update', 'TokenController@update');
    Route::get('/token/{id}/delete', 'TokenController@delete');
    Route::get('/seluruhtoken', 'TokenController@index2');
});

Route::group(['prefix' => 'quiz', 'middleware' => ['auth', 'CheckRole:siswa']], function () {

    Route::post('/', [
        'uses' => 'SoalController@showQuiz',
        'as' => 'show.quiz'
    ]);

    Route::post('start', [
        'uses' => 'SoalController@startQuiz',
        'as' => 'start.quiz'
    ]);

    Route::get('load/{ids}/answer', [
        'uses' => 'SoalController@loadQuizAnswers',
        'as' => 'load.quiz.answers'
    ]);

    Route::post('submit', [
        'uses' => 'SoalController@submitQuiz',
        'as' => 'submit.quiz'
    ]);

});

Route::group(['middleware' => ['auth', 'CheckRole:guru']], function () {
    // Route::get('/dashboard','DashboardController@index');
    Route::get('/', 'SoalController@index');
    Route::post('/soal/create', 'SoalController@create');
    Route::get('/soal/{id}/edit', 'SoalController@edit');
    Route::post('/soal/{id}/update', 'SoalController@update');
    Route::get('/soal/{id}/delete', 'SoalController@delete');

    Route::get('/token', 'TokenController@index');
    Route::post('/token/create', 'TokenController@create');
    Route::get('/token/{id}/edit', 'TokenController@edit');
    Route::post('/token/{id}/update', 'TokenController@update');
    Route::get('/token/{id}/delete', 'TokenController@delete');

    Route::get('/nilai', 'NilaiController@index');
    Route::get('/nilai2', 'NilaiController@index2');
});
