<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion'];
    protected $table = 'evaluacion';

    public function encargado(){
        return $this->belongsTo(Encargado::class);
    }
    public function evaluaciones_empleados(){
        return $this->hasMany(EvaluacionEmpleado::class);
    }
    public function categoria_evaluacion_evaluacion(){
        return $this->hasMany(CategoriaEvaluacionEvaluacion::class);
    }
}
