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
require __DIR__.'/auth.php';
