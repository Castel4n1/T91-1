<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = Fornecedor::orderBy('entregador')->get();
        return view('fornecedor.index')
                ->with(compact('fornecedores'));
    }

    public function create(){
        $fornecedor = null;
        return view('fornecedor.form')
                ->with(compact('fornecedor'));
    }

    public function store(Request $request){
        $fornecedor = new Fornecedor();
        $fornecedor->fill($request->all());
        $fornecedor->save();

        return redirect()->route('fornecedor.index')->with('success','Cadastrado com sucesso');
    }

    public function show(int $id){
        $fornecedor = Fornecedor::find($id);
        return view('fornecedor.show')
                ->with(compact('fornecedor'));
    }

    public function edit(int $id){
        $fornecedor = Fornecedor::find($id);
        return view('fornecedor.form')
                ->with(compact('fornecedor'));
    }

    public function update(Request $request, int $id){
        $fornecedor = Fornecedor::find($id);
        $fornecedor->fill($request->all());
        $fornecedor->save();

        return redirect()->route('fornecedor.index')->with('success','Atualizado com sucesso');
    }

    public function destroy(int $id){
        $fornecedor = Fornecedor::find($id);
        $fornecedor->delete();

        return redirect()->route('fornecedor.index')->with('danger','Excluído com sucesso');
    }
}
