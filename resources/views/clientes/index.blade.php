@foreach($clientes as $cliente)
    {{ $cliente->nome }} | {{ $cliente->endereco }} | {{ $cliente->descricao }}
    </br>
@endforeach
