<?php

use App\Http\Controllers\Controllerresep;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/resep', function () {
//     return view('resep');
// });
Route::get('/register', [Controllerresep::class, 'formregister'])->name('formregister');
Route::post('/register', [Controllerresep::class, 'register'])->name('register');
Route::get('/login', [Controllerresep::class, 'formlogin'])->name('formlogin');
Route::post('/login', [Controllerresep::class, 'login'])->name('login');
Route::post('/logout', [Controllerresep::class, 'logout'])->name('logout');
Route::get('/', [Controllerresep::class, 'home'])->name('home');
Route::get('/resep/{id}', [Controllerresep::class, 'resep'])->name('resep');

Route::middleware(['adminlogin'])->group(function(){
Route::get('/admin',[Controllerresep::class,'admin'])->name('admin');
Route::get('/dataresep',[Controllerresep::class,'dataresep'])->name('dataresep');
Route::get('/resepmasuk',[Controllerresep::class,'resepmasuk'])->name('resepmasuk');
Route::get('/resepkeluar',[Controllerresep::class,'resepkeluar'])->name('resepkeluar');
});

Route::get('/tambahresep',[Controllerresep::class,'tambahresep'])->name('tambah');
Route::post('/store',[Controllerresep::class,'tambahresepadmin'])->name('tambahresepadmin');



Route::delete('/hapus/{resep}', [Controllerresep::class, 'hapusresepadmin'])->name('hapusadmin');
Route::get('/edit/{resep}', [Controllerresep::class, 'editresepadmin'])->name('edit');
Route::put('/{resep}', [Controllerresep::class, 'update'])->name('update');
Route::post('/ajukanresep',[Controllerresep::class,'tambahmasuk'])->name('tambahmasuk');
Route::get('/terima/{id}', [Controllerresep::class, 'terima'])->name('terima');
Route::get('/tolak/{id}', [Controllerresep::class, 'tolak'])->name('tolak');
Route::get('/keluar/{id}', [Controllerresep::class, 'keluar'])->name('keluar');
Route::get('/lihat/{model}/{id}', [Controllerresep::class, 'lihat'])->name('lihat');