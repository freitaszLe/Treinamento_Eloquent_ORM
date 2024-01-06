<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Client::get();

        return view('clientes.index', [
            'clientes' => $clientes
        ]);
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => ['required', 'min:3', 'max:100'],
            'endereco' => ['required', 'max:200'],
            'descricao' => ['required']
        ]);

        $novoCliente = new Client;
        $novoCliente->nome = $request->input('nome');
        $novoCliente->endereco = $request->input('endereco');
        $novoCliente->descricao = $request->input('descricao');

        $novoCliente->save();

        return redirect('/clientes');
    }
}
