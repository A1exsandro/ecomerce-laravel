<?php

namespace App\Models;

class Endereco extends RModel
{
    protected $table = "enderecos";
    protected $fillable = ['address', 'complement', 'number', 'cep', 'city', 'state'];
}
