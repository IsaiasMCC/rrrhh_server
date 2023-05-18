<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellidos', 'fecha_nacimiento', 'ci', 'domicilio', 'zona', 'telefono', 'telefono_referencia', 'correo'];
    protected $table = 'personal';
}
