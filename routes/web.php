<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller_vew;
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
    return view('Home');
});

Route::get('/Sobre_Nosotros',[controller_vew::class,'About']);
Route::get('/FAQ',[controller_vew::class,'FAQ']);
Route::get('/NFT_TO_DOC',[controller_vew::class,'NFT']);
Route::get('/Visualaizer',[controller_vew::class,'Visualaizer']);
Route::get('/Forms',[controller_vew::class,'Forms']);
Route::get('/Wallet',[controller_vew::class,'Wallet']);
Route::get('/visualizar-pdf', 'PdfController@visualizarPdf')->name('visualizar.pdf');
