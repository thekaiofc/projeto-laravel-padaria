<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'tbProduto';

    protected $fillable = ['idProduto','nome','descricao','valor','data'];

public $timestamps = false;
}
