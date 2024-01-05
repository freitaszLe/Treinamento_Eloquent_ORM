<?php

use App\Http\Controllers\SiteController;
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

Route::get('servico/{codigo?}', function($codigo = null) {
    
    if (!$codigo) {
        echo "Serviço não encontrado";
        return;
    }

    $servicos = [
        'php' => 'Detalhes do serviço de PHP',
        'devops' => 'Detalhes do serviço de devops',
        'frontend' => 'Detalhes do serviço de frontend',
    ];

    $descricaoServico = $servicos[$codigo];

    echo $descricaoServico;
});


