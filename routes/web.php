<?php

use Illuminate\Support\Facades\Route;
use App\Models\mi_clase;
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
    return view('index');
});
Route::get('/singleJ.blade.php', function () {
    return view('singleJ');
});
Route::get('/single.php', function () {
    return view('single');
});

Route::get('/singletwo.blade.php', function () {
    return view('singletwo');
});

Route::get('/singlethree.blade.php', function () {
    $clase=new mi_clase();
    $clase->tema="Reconocer protocolos de comunicación de red";
    return view('singlethree',["mi_clase" => $clase]);
});
Route::get('/singlefour.blade.php', function () {
    return view('singlefour');
});
Route::get('/index2.blade.php', function () {
    return view('index2');
});
Route::get('/index3.blade.php', function () {
    return view('index3');
});
Route::get('/index4.blade.php', function () {
    return view('index4');
});
Route::get('/index5.blade.php', function () {
    return view('index5');
});
Route::get('/index6.blade.php', function () {
    return view('index6');
});