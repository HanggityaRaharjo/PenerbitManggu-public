<?php


use App\Models\Category;


use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\PostController;
Use App\Http\Controllers\LoginController;
Use App\Http\Controllers\FrontController;
Use App\Http\Controllers\penerbitmangguController;


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
    return view('layouts.index');
});

Route::get('/sekilas-tentang-penerbit-manggu', function () {
    return view('layouts.sekilas-tentang-penerbit-manggu');
});

Route::get('/visi-misi-tujuan', function () {
    return view('layouts.visi-misi-tujuan');
});
Route::get('/legalitas', function () {
    return view('layouts.legalitas');
});
Route::get('/manajemen', function () {
    return view('layouts.manajemen');
});
Route::get('/faq', function () {
    return view('layouts.faq');
});
Route::get('/cara-kirim-naskah', function () {
    return view('layouts.cara-kirim-naskah');
});
Route::get('/manggu-info', function () {
    return view('layouts.manggu-info');
});
Route::get('/manggu-event', function () {
    return view('layouts.manggu-event');
});
Route::get('/press-release', function () {
    return view('layouts.press-release');
});
Route::get('/product-launching', function () {
    return view('layouts.product-launching');
});

Route::get('/penulis', function () {
    return view('layouts.penulis');
});
Route::get('/data-penjualan-dan-royalti', function () {
    return view('layouts.data-penjualan-dan-royalti');
});

//FRONT
Route::get('/manggu-info', [FrontController::class, 'berita']);
Route::get('/penulis', [FrontController::class, 'penulis']);
Route::get('/data-penjualan-dan-royalti', [FrontController::class, 'dataroyalti','keyword']);
Route::get('/', [penerbitmangguController::class, 'indexberanda']);
Route::get('/manggu-info-halaman/{slug}', [FrontController::class, 'beritadetail'])->name('manggu-info-halaman');
Route::get('/data-penjualan-dan-royalti/{id}', [FrontController::class, 'klaim_data'])->name('data-penjualan-dan-royalti');
// Katalog
Route::get('/katalog-buku', [FrontController::class, 'katalog_index'])->name('katalog-buku');


// Formulir Data Royalti
Route::post('/data-penjualan-dan-royalti/send/{id}', [FrontController::class, 'formulir'])->name('data-penjualan-dan-royalti-formulir');

// LOGIN 

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/postlogin', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::group(['middleware' => 'Auth'], function () {
Route::middleware('can:admin')->group(function () {
    Route::get('Dashboard', function () {
        return view('layouts.admin.index');
    });
});
Route::prefix('peserta')->middleware('can:peserta')->group(function () {        
    });
});



//ADMINDASHBOARD
    //SLIDE
    Route::get('/Dashboard', [penerbitmangguController::class, 'slide']);
    Route::post('/index/store', [penerbitmangguController::class, 'slidestore']);
    // Route::get('/index/edit/{id}', [penerbitmangguController::class, 'slideedite']);
    // Route::post('/index/update/{id}', [penerbitmangguController::class, 'slideupdate']);
    Route::get('/Dashboard/delete/{id}', [penerbitmangguController::class, 'slidedestroy']);
    //YOUTUBE
    Route::put('/Dashboard/update/{id}', [penerbitmangguController::class, 'youtubeupdate']);

//ADMINBERITA
Route::get('/berita-admin', [penerbitmangguController::class, 'berita']);
Route::post('/berita-admin/store', [penerbitmangguController::class, 'beritastore']);
Route::get('/berita-admin/edit/{id}', [penerbitmangguController::class, 'beritaedit']);
Route::post('/berita-admin/update/{id}', [penerbitmangguController::class, 'beritaupdate']);
Route::get('/berita-admin/delete/{id}', [penerbitmangguController::class, 'beritadestroy']);   

//ADMINDATAROYALTI  
Route::get('/data-royalti-admin', [penerbitmangguController::class, 'dataroyalti']);
Route::post('/data-royalti-admin/store', [penerbitmangguController::class, 'dataroyaltistore']);
Route::get('/data-royalti-admin/edit/{id}', [penerbitmangguController::class, 'dataroyaltiedit']);
Route::put('/data-royalti-admin/update/{id}', [penerbitmangguController::class, 'dataroyaltiupdate']);
Route::get('/data-royalti-admin/delete/{id}', [penerbitmangguController::class, 'dataroyaltidestroy']); 
Route::get('/data-royalti-admin/search', [penerbitmangguController::class,'search']);
Route::get('/exportdataroyalti', [penerbitmangguController::class,'dataroyaltiexport'])->name('exportdataroyalti');
Route::post('/importdataroyalti', [penerbitmangguController::class,'dataroyaltiimport'])->name('importdataroyalti');

//ADMINPRODUK
Route::get('/produk-admin', [penerbitmangguController::class, 'produk']); 

//ADMINPENULIS
Route::get('/penulis-admin', [penerbitmangguController::class, 'penulis']);
Route::post('/penulis-admin/store', [penerbitmangguController::class, 'penulisstore']);
Route::get('/penulis-admin/edit/{id}', [penerbitmangguController::class, 'penulisedit']);
Route::post('/penulis-admin/update/{id}', [penerbitmangguController::class, 'penulisupdate']);
Route::get('/penulis-admin/delete/{id}', [penerbitmangguController::class, 'penulisdestroy']);

// ADMINKATALOG 
Route::get('/katalog-admin', [penerbitmangguController::class, 'katalog_index']);
Route::post('/katalog-admin/store', [penerbitmangguController::class, 'create_katalog']);


