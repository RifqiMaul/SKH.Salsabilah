<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, 'index']);
Route::get('/gallery.html', [FrontController::class, 'gallery']);
Route::get('/agenda.html', [FrontController::class, 'agenda']);
Route::get('/profile.html', [FrontController::class, 'profile']);
Route::get('/daftar.html', [FrontController::class, 'daftar']);
Route::post('/proses_daftar_siswa.html', [FrontController::class, 'prosesDaftarSiswa']);
Route::get('/login.html', [FrontController::class, 'login']);
Route::post('/proses_login_siswa.html', [FrontController::class, 'loginSiswa']);

Route::get('/siswa/biodata.html', [BackController::class, 'biodata']);
Route::post('/siswa/proses_ubah_biodata.html', [BackController::class, 'editBiodata']);
Route::get('/siswa/berkas.html', [BackController::class, 'berkas']);
Route::post('/siswa/proses_upload_berkas.html', [BackController::class, 'prosesUpload']);

Route::get('/admin.html', [BackController::class, 'index']);
Route::post('/proses_login_admin.html', [BackController::class, 'loginAdmin']);

Route::get('/admin/dashboard.html', [BackController::class, 'dashboard']);

Route::get('/admin/siswa.html', [BackController::class, 'siswa']);

Route::get('/admin/gallery.html', [BackController::class, 'gallery']);
Route::post('/admin/get_gallery.html', [BackController::class, 'getGallery']);
Route::post('/admin/proses_upload_gallery.html', [BackController::class, 'prosesGallery']);
Route::post('/admin/proses_ubah_gallery.html', [BackController::class, 'prosesUbahGallery']);
Route::post('/admin/proses_hapus_gallery.html', [BackController::class, 'hapusGallery']);

Route::get('/admin/agenda.html', [BackController::class, 'agenda']);
Route::post('/admin/get_agenda.html', [BackController::class, 'getAgenda']);
Route::post('/admin/proses_tambah_agenda.html', [BackController::class, 'prosesAgenda']);
Route::post('/admin/proses_ubah_agenda.html', [BackController::class, 'editAgenda']);
Route::post('/admin/proses_hapus_agenda.html', [BackController::class, 'hapusAgenda']);

Route::get('/admin/profile.html', [BackController::class, 'profile']);
Route::post('/admin/proses_ubah_profile.html', [BackController::class, 'editProfile']);

Route::get('/logout.html', [BackController::class, 'logout']);
