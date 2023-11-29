<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;

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

Route::get('/', function () {
    return view('welcome');
});

//route untuk halaman utama FIXME:✔
Route::get('/siswa',[SiswaController::class,'siswa']);

//Route untuk halaman tambah siswa FIXME:✔
Route::get('/siswa/tambah' ,[SiswaController::class, 'tambahsis']);
Route::post('/ProsesTambahSiswa',[SiswaController::class,'TambahSiswa']);

//route untuk mengedit data siswa FIXME:✔
Route::get('/siswa/edit/{id}',[SiswaController::class , 'Editsis']);
Route::post('/ProsesEditSiswa' ,[SiswaController::class , 'EditSiswa']);

//route untuk dellete siswa FIXME:✔
Route::get('/siswa/hapus/{id}',[SiswaController::class , 'hapussis']);

//route untuk serching FIXME:✔
Route::post('/siswa/serch' , [SiswaController::class, 'serch']);
