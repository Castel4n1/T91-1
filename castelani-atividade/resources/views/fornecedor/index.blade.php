@extends('layouts.base')

@section('conteudo')
    <h1>Entregadores</h1>
    -
    <a href="{{ route('fornecedor.create') }}" class="btn btn-dark">
        Novo
    </a>
@endsection