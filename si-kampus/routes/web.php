<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\RiwayatPendidikanController;

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

// tampil data dosen
Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');
// tambah data dosen
Route::post('/insert', [DosenController::class, 'insertData'])->name('insert');
// update data dosen
Route::get('/tampilData/{id}', [DosenController::class, 'tampilData'])->name('tampilData');
Route::post('/update/{id}', [DosenController::class, 'updateData'])->name('update');
// delete data dosen
Route::get('/delete/{id}', [DosenController::class, 'deleteData'])->name('delete');



// riwayat pendidikan
Route::get('/riwayatPendidikan', [RiwayatPendidikanController::class, 'index'])->name('riwayatPendidikan');
// insert
Route::post('/insertRp', [RiwayatPendidikanController::class, 'insertData'])->name('insertRp');
// update data
Route::get('/tampilDataRp/{id}', [RiwayatPendidikanController::class, 'tampilData'])->name('tampilDataRp');
Route::post('/updateRp/{id}', [RiwayatPendidikanController::class, 'updateData'])->name('updateRp');
// delete data
Route::get('/deleteRp/{id}', [RiwayatPendidikanController::class, 'deleteData'])->name('deleteRp');

// mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
// tambah data
Route::post('/insertMahasiswa', [MahasiswaController::class, 'insertData'])->name('insertMahasiswa');
// update data
Route::get('/tampilDataMahasiswa/{id}', [MahasiswaController::class, 'tampilData'])->name('tampilDataMahasiswa');
Route::post('/updateMahasiswa/{id}', [MahasiswaController::class, 'updateData'])->name('updateMahasiswa');
// delete data
Route::get('/deleteMahasiwa/{id}', [MahasiswaController::class, 'deleteData'])->name('deleteMahasiwa');



// mata kuliah
Route::get('/mataKuliah', [MataKuliahController::class, 'index'])->name('mataKuliah');
// tambah data
Route::post('/insertMatkul', [MataKuliahController::class, 'insertData'])->name('insertMatkul');
// update data
Route::get('/tampilDataMatkul/{id}', [MataKuliahController::class, 'tampilData'])->name('tampilDataMatkul');
Route::post('/updateMatkul/{id}', [MataKuliahController::class, 'updateData'])->name('updateMatkul');
// delete data
Route::get('/deleteMatkul/{id}', [MataKuliahController::class, 'deleteData'])->name('deleteMatkul');


// kelas
Route::get('/kelas', function () {
    return view('kelas');
});
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
// tambah data
Route::post('/insertKelas', [KelasController::class, 'insertData'])->name('insertKelas');
// update data
Route::get('/tampilDataKelas/{id}', [KelasController::class, 'tampilData'])->name('tampilDataKelas');
Route::post('/updateKelas/{id}', [KelasController::class, 'updateData'])->name('updateKelas');
// delete data
Route::get('/deleteKelas/{id}', [KelasController::class, 'deleteData'])->name('deleteKelas');

// relas
Route::get('/relasi', function () {
    return view('relasi');
});
