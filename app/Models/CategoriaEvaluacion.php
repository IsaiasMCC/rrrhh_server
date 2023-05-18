<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaEvaluacion extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion'];
    protected $table = 'categoria_evaluacion';

    public function categoria_evaluacion_evaluacion(){
        return $this->hasMany(CategoriaEvaluacionEvaluacion::class);
    }
    public function preguntas(){
        return $this->hasMany(Pregunta::class);
    }

}
