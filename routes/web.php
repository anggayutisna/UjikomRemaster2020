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
    return view('frontend.home');
});

Route::get('/tentang', function () {
    return view('frontend.about');
});

Route::get('/administrasi', function () {
    return view('frontend.adminis');
});

Route::get('/halaman_login', function () {
    return view('frontend.Login.index');
});

Route::get('/login_guru', function () {
    return view('frontend.Login.loginguru');
});

Route::get('/login_siswa', function () {
    return view('frontend.Login.loginsiswa');
});


Route::get('/siswa', function () {
    return view('frontend.Siswa.index');
});

Route::get('/guru', function () {
    return view('frontend.Guru.index');
});

Route::get('/penilaian', function () {
    return view('frontend.Guru.penilaian');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




// Backend atau Admin

Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth']],
    function () {
        Route::get('/admin', function () {
            return view('backend.index');
        });
        Route::resource('kelas', 'KelasController');
        Route::resource('jurusan','JurusanController');
        Route::resource('guru','GuruController');
        Route::resource('mapel','MapelController');
        Route::resource('siswa','SiswaController');
    }
);
