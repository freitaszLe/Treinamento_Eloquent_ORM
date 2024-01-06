<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\VerServicos;
use App\Models\Client;
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

Route::get('home', [SiteController::class, 'home']);
Route::get('contato', [SiteController::class, 'contato']);
Route::get('sobre', [SiteController::class, 'sobre']);

Route::get('servico/{codigo?}', VerServicos::class);

Route::get('clientes', function() {
    var_dump(Client::get());
});
