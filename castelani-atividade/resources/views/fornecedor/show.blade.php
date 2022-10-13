@extends('layouts.base')

@section('conteudo')

    <h1>Fornecedor: </h1>
    <ol>
        <h3>ID: {{ $fornecedor->id_fornecedor                   }}</h3>
        <hr>
        <h3>CPF: {{ $fornecedor->cpf                             }}</h3>
        <hr>
        <h3>FORNECEDOR: {{ $fornecedor->empresa                         }}</h3>
        <hr>
        <h3>ENTREGADOR: {{ $fornecedor->entregador                         }}</h3>
        <hr>
        <h3>DATA DE ENTREGA: {{ $fornecedor->created_at                         }}</h3>
    </ol>
    
@endsection