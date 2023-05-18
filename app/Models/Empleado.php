<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'cargo', 'sucursal'];
    protected $table = 'empleado';

    public function evaluaciones_empleado(){
        return $this->hasMany(EvaluacionEmpleado::class);
    }
}
