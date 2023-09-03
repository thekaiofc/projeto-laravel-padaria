<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'tbproduto';

    protected $fillable = ['idProduto','produto','descricao','valor','data'];

public $timestamps = false;
}
