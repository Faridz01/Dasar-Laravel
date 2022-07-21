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
    //return view('welcome');
});

Route::get('halaman-2', function () {
    return ('halaman 2');
});

Route::get('halaman-3', function () {
    return ('halaman 3');
});

Route::get('halaman-3/profile', function () {
    return ('halaman profile 3');
});

Route::get('halaman-3/{nama}', function ($nama) {
    return ('halaman 3 ' .$nama);
});

Route::get('halaman/{nama}/jenis-kelamin/{jk}', function ($nama, $jk) {
    return ('Halaman Profile '.$nama. ' Dengan Jenis Kelamin : ' .$jk);
});

Route::get('kocak', function () {
    return view ('kocak');
});

Route::get('ridz/{nama}', function ($nama) {
    $calculator = 2 + 14;
    return view('ridz ', compact('nama', 'calculator'));
});


  //route
  Route :: get ('pesan/{menu}', function ($a = "_") {
  return view('pages.pesan ', compact('a'));
});

//latihan
    Route::get('latihan/{makanan?}/{minuman?}/{porsi?}',function ($makanan = 'silahkan isi makamam', $minuman = null, $porsi = null){
    return view ('pages.latihan', compact('makanan', 'minuman', 'porsi'));
});
//contoller
    Route::get('hallo', 'LthnController@hallo');
    Route::get('profile', 'LthnController@profile');
    Route::get('twitter/{perkalian}-{nama}', 'LthnController@perkalian');
    Route::get('siswa', 'LthnController@siswa');
    Route::get('berat_badan/{berat}/{tinggi}', 'LthnController@berat_badan');
    Route::get('kampus', 'LthnController@kampus');
    Route::get('kelas', 'LthnController@kelas');
    Route::get('belanja', 'LthnController@belanja');

//latihan2
