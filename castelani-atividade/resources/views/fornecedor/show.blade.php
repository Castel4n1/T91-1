@extends('layouts.base')

@section('conteudo')

    <h1>Fornecedor: </h1>
    <ol>
        <td>{{ $fornecedor->id_fornecedor                   }}</td>
        <td>{{ $fornecedor->cpf                             }}</td>
        <td>{{ $fornecedor->empresa                         }}</td>
    </ol>
    
@endsection