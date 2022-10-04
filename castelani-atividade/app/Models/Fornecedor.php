<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'fornecedores';
    protected $primaryKey = 'id_fornecedor';
    protected $dates = ['dt_entrega'];
    protected $fillable = ['entregador','cpf', 'empresa'];
}
