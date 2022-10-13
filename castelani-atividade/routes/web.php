<?php

use Illuminate\Support\Facades\Route;
#Controller
use App\Http\Controllers\FornecedorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('dashboard');
});

#Dashboard -------------------------------------------------------------------------
Route::prefix('dashboard')->middleware(['auth'])->group( function(){
    Route::get('/', function(){
        return view('dashboard');
    })->name('dashboard');
});

#FORNECEDOR ROTAS -------------------------------------------------------------------
Route::prefix('fornecedor')->middleware(['auth'])->controller(FornecedorController::class)
->group( function()
{
    Route::get('/', 'index')->      name('fornecedor.index');
    Route::get('/novo', 'create')-> name('fornecedor.create');
    Route::get('/editar/{id}', 'edit')-> name('fornecedor.edit');
    Route::get('/mostrar/{id}', 'show')-> name('fornecedor.show');
    Route::post('/cadastrar', 'store')-> name('fornecedor.store');
    Route::post('/atualizar/{id}', 'update')-> name('fornecedor.update');
    Route::get('/deletar/{id}', 'destroy')-> name('fornecedor.destroy');
    

});

require __DIR__.'/auth.php';
