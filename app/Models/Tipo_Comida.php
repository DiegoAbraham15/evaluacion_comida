<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tipo_Comida extends Model
{
    use HasFactory;
    
    protected $table = 'tipo_comida';
    protected $primaryKey = 'id_tipo_comida';
    protected $fillable = [
        'nombre_categoria',
    ];
}
