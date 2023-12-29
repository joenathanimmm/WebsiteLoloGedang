<?php

use App\Models\CatatanImunisasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JadwalImunisasiController;
use App\Http\Controllers\CatatanImunisasiController;
use App\Http\Controllers\RiwayatKesehatanController;

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

Route::get('/admin/login', function () {
    return view('admin.login');
});


Route::post('/admin/login',[AuthController::class,'adminLogin'])->name('admin.login');

Route::prefix('admin')->middleware(['must-admin'])->group(function () {

  

    Route::get('/', function () {
        return view('admin.dashboard');
    });

    //Jadwal Imunisasi Controller
    Route::get('/jadwal-imunisasi',[JadwalImunisasiController::class,'home'])->name('admin.jadwal-imunisasi.home');
    Route::get('/jadwal-imunisasi/create',[JadwalImunisasiController::class,'create'])->name('admin.jadwal-imunisasi.create');
    Route::post('/jadwal-imunisasi/create',[JadwalImunisasiController::class,'store'])->name('admin.jadwal-imunisasi.store');
    Route::get('/jadwal-imunisasi/update/{id}',[JadwalImunisasiController::class,'updateView'])->name('admin.jadwal-imunisasi.viewUpdate');
    Route::put('/jadwal-imunisasi/update/{id}',[JadwalImunisasiController::class,'update'])->name('admin.jadwal-imunisasi.update');
    Route::delete('/jadwal-imunisasi/delete/{id}',[JadwalImunisasiController::class,'delete'])->name('admin.jadwal-imunisasi.delete');

    //Imunisasi Controller
    Route::get('/catatan-imunisasi',[CatatanImunisasiController::class,'home']);
    Route::get('/catatan-imunisasi/detail/{id}',[CatatanImunisasiController::class,'detail'])->name('detail.imunisasi');
    Route::get('/catatan-imunisasi/detail/{id}/{id_anak}',[CatatanImunisasiController::class,'detailAnak'])->name('detail-anak.imunisasi');
    Route::post('/catatan-imunisasi/detail/{id}/{id_anak}',[CatatanImunisasiController::class,'store'])->name('tambah-catatan.imunisasi');

});

Route::get('/', function () {
    return view('home');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/informasi-layanan',[JadwalImunisasiController::class,'jadwalImun']);
// Route::get('/informasi-layanan', function () {
//     return view('layanan');
// });
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/registrasi', function () {
    return view('register');
});
Route::post('/registrasi',[AuthController::class, 'registrasi'])->name('registrasi');
Route::post('/login',[AuthController::class, 'login'])->name('login');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/profil', function () {
    return view('profil');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/daftar-imunisasi', function () {
        return view('daftar-imunisasi');
    });
    Route::post('/daftar-imunisasi',[AnakController::class, 'store'])->name('daftar-imunisasi-anak');
    
    
    
    Route::get('/profil-pengguna',[AuthController::class, 'profilePengguna'])->name('profile-pengguna');
    Route::put('/profil-pengguna',[AuthController::class, 'updatePengguna'])->name('update.profile-pengguna');
    
    
  
    
    // Route::get('/profil-pengguna', function () {
    //     return view('logged-in/profil-pengguna');
    // });
    
    
    
    Route::get('/riwayat-kesehatan',[RiwayatKesehatanController::class, 'home'])->name('riwayat-kesehatan');
    Route::get('/riwayat-kesehatan/detail/{id}',[RiwayatKesehatanController::class, 'detail'])->name('riwayat-kesehatan.detail');
    // Route::get('/riwayat-kesehatan', function () {
    //     return view('/logged-in/riwayat-kesehatan');
        
    // });
});


