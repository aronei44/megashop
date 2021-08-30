<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\GoodController;

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
// base route
Route::get('/', 			function () 		{return view('index',		['url'=>'/']);});
Route::get('/toko', 		function () 		{return redirect('/toko/all');});
Route::get('/toko/{link}', 	function ($link) 	{return view('toko',		['is_active'=>$link,'url'=>'/toko']);});
Route::get('/barang/{id}', 	function ($id) 		{return view('barang',		['id'=>$id]);});





// login route
Route::get('/login', 	function () {return view('login',	['url'=> '/login']);})->name('login')->middleware('guest');
Route::get('/register', function () {return view('register',['url'=> '/login']);})->middleware('guest');
Route::get('/logout',	[UserController::class, 'logout']);

Route::post('/login', 	[UserController::class, 'login']);
Route::post('/register',[UserController::class, 'register']);


// auth route
Route::get('/profil',	[UserController::class,'profil'])->middleware('auth');
Route::get('/editprofil',[UserController::class,'editProfil'])->middleware('auth');
Route::get('/editprofil/{id}',[UserController::class,'get_city'])->middleware('auth');
Route::get('/editfoto', function () {return view('foto',	['url'=> '/profil']);})->middleware('auth');
Route::post('/editfoto', [UserController::class,'ubahFoto'])->middleware('auth');
Route::post('/editprofil',[UserController::class,'simpan'])->middleware('auth');
Route::get('/tokoku', [GoodController::class,'lihat']);
Route::get('/tokoku/tambah-barang', function (){return view('tambah-barang',['url'=>'/profil']);});
Route::post('/tokoku/tambah-barang', [GoodController::class,'add']);

