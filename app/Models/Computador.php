<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computador extends Model
{
    protected $table      = "computadores";
    protected $primaryKey = "computadorId";
    protected $fillable   = [
        'marca',
        'preco',
        'ram',
        'disco'
    ];
}
