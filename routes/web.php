<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded within the "web" middleware group which includes
| sessions, cookie encryption, and more. Go build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function() {
    echo "Estou na home";
});

Route::get('contato', function() {
    echo "Estou no contato";
});

Route::get('sobre', function() {
    echo "Estou na sobre";
});

Route::get('servicos', function() {
    echo "Estou no serviços";
});

