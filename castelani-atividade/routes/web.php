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
    Route::get('/novo', 'create')-> name('forcenedor.create');
    Route::get('/editar/{id}', 'edit')-> name('forcenedor.edit');
    Route::get('/mostrar', 'show')-> name('forcenedor.show');
    Route::get('/cadastrar', 'store')-> name('forcenedor.store');
    Route::get('/atualizar/{id}', 'update')-> name('forcenedor.update');
    Route::get('/deletar/{id}', 'destroy')-> name('forcenedor.destroy');
    

});

require __DIR__.'/auth.php';
