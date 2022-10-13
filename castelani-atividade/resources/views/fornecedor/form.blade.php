@extends('layouts.base')

@section('conteudo')
    
    <h1>
        @if($fornecedor)
        Atualizar Recebimento
        @else
        Novo Recebimento
        @endif
    </h1>
    @if ($fornecedor)
        <form action="{{ route('fornecedor.update', ['id'=>$fornecedor->id_fornecedor]) }}" method="post">        
    @else
        <form action="{{ route('fornecedor.store') }}" method="post">        
    @endif
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label for="entregador"  class="form-label" >Entregador*</label>
                <input type="text" name="entregador" id="entregador" class="form-control" value="{{ $fornecedor ? $fornecedor->entregador : old('entregador') }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="cpf"  class="form-label" >Cpf*</label>
                <input type="text" name="cpf" id="cpf" class="form-control" value="{{ $fornecedor ? $fornecedor->cpf : old('cpf') }}" required>
            </div>
            <div class="form-group col-md-12">
                <label for="empresa"  class="form-label" >Empresa*</label>
                <input type="text" name="empresa" id="empresa" class="form-control" value="{{ $fornecedor ? $fornecedor->empresa : old('empresa') }}" required>
            </div>
            <div class="form-group col-md-2">
                <br>
                <input type="submit" value=" {{ $fornecedor ? 'Atualizar' : 'Cadastrar'}}" class="btn btn-primary mt-2">
            </div>
        </div>
    </form>
@endsection