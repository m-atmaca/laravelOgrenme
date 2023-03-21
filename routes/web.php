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
    return view('welcome');
});


/*
Route::controller(\App\Http\Controllers\TestController::class)->group(function (){
    Route::get('/denemeSayfasi','testFonk')->name('denemeSayfasinaGider');
    Route::get('/detaySayfasi','detayFonk')->name('detaySayfasinaGider');
});
*/


Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/denemeSayfasi',[\App\Http\Controllers\TestController::class,'testFonk'])->name('denemeSayfasinaGider');
    Route::get('/detaySayfasi',[\App\Http\Controllers\TestController::class,'detayFonk'])->name('detaySayfasinaGider');


    Route::get('/kitapSayfasi',[\App\Http\Controllers\BookController::class,'kitapFonk'])->name('kitapFonk');
    Route::get('/kitapSayfasi/Ekle',[\App\Http\Controllers\BookController::class,'kitapEkleFonk'])->name('kitapEkleFonk');
    Route::post('/kitapSayfasi/Ekle',[\App\Http\Controllers\BookController::class,'store'])->name('store');
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


