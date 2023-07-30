<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PesanController;
use App\Models\Media;


Route::get('/', function ()  {
    $medias = Media::get();
    return view('welcome', compact('medias'));
});
Route::get('Beranda', function ()  {
    $medias = Media::get();
    return view('welcome', compact('medias'));
});

Auth::routes();

//REGISTER
Route::get('recandyster', [App\Http\Controllers\RegisterController::class, 'register'])->name('recandyster');
Route::post('recandyster/action', [App\Http\Controllers\RegisterController::class, 'actionregister'])->name('actionregister');
Route::get('recandyster/verify/{verify_key}', [App\Http\Controllers\RegisterController::class, 'verify'])->name('verify');

//HALAMAN WEB
Route::resource('FormAlumni',AlumniController::class);
Route::get('/kirimpesan', [App\Http\Controllers\AlumniController::class, 'kirimpesan'])->name('kirimpesan');
Route::post('Pesan', [App\Http\Controllers\AlumniController::class, 'simpanpesan'])->name('Pesan');

//HALAMAN ADMIN
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profil', [App\Http\Controllers\HomeController::class, 'profil'])->name('profil');
Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::get('/hubungiWa/{id}', [App\Http\Controllers\AdminController::class, 'wa'])->name('hubungiWa');
Route::get('/Laporan', [App\Http\Controllers\AdminController::class, 'laporan'])->name('Laporan');
Route::post('/cariData', [App\Http\Controllers\AdminController::class, 'cari'])->name('cariData');
Route::post('/cari', [App\Http\Controllers\HomeController::class, 'cari'])->name('cari');
Route::get('/cetakData', [App\Http\Controllers\AdminController::class, 'cetak'])->name('cetakData');
Route::get('export-data', [App\Http\Controllers\AdminController::class, 'cExcel'])->name('export-data');

Route::resource('DaftarAlumni',AdminController::class);
Route::resource('DaftarJurusan',JurusanController::class);
Route::resource('DaftarStatus',StatusController::class);
Route::resource('media',MediaController::class);
Route::resource('DaftarUser',UserController::class);
Route::resource('DaftarPesan',PesanController::class);