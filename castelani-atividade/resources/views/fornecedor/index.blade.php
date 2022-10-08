@extends('layouts.base')

@section('conteudo')
<h1>Recebimento</h1>
-
<a href="{{ route( 'fornecedor.create' ) }}" class="btn btn-dark">
    Novo
</a>

<table class="table table-striped table-border table-hover">
    {{-- Cabeçalho --}}
    <thead> 
        <tr>
            <th>Ação</th>
            <th>Fornecedor</th>
            <th>Cpf</th>
            <th>Empresa</th>
            <th>Recebido em:</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fornecedores as $fornecedor)
            
            <tr>
                <td>
                    <a href="{{ route('fornecedor.show', ['id'=>$fornecedor->id_fornecedor]) }}" class="btn btn-warning">
                        Ver
                        
                    </a>                    
                    <a href="{{ route('fornecedor.edit', ['id'=>$fornecedor->id_fornecedor]) }}" class="btn btn-success">
                        Editar
                    </a>
                    <a href="{{ route('fornecedor.destroy', ['id'=>$fornecedor->id_fornecedor]) }}" class="btn btn-danger">
                        Excluir
                    </a>
                </td>
                <td>{{ $fornecedor->entregador }} </td>
                <td>{{ $fornecedor->cpf }} </td>
                <td>{{ $fornecedor->empresa }} </td>
                <td>{{ $fornecedor->created_at}} </td>
            </tr>
        @endforeach
    </tbody>
@endsection