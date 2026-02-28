<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comida extends Model
{
    use HasFactory;
    
    protected $table = 'comida';
    protected $primaryKey = 'id_comida';
    protected $fillable = [
        'nombre_comida',
        'costo',
        'detalle_comida',
        'categoria',
    ];
}
