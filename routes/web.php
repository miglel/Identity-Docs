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

Route::get('/Search',[controller_vew::class,'Search']);
Route::get('/Upload',[controller_vew::class,'Upload']);
Route::get('/Library',[controller_vew::class,'Library']);