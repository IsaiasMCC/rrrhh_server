<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaEvaluacionEvaluacion extends Model
{
    use HasFactory;
    protected $fillable = ['categoria_evaluacion_id', 'evaluacion_id'];
    protected $table = 'categoria_evaluacion_evaluacion';

    public function categoria_evaluacion(){
        return $this->belongsTo(CategoriaEvaluacion::class);
    }

    public function evaluacion(){
        return $this->belongsTo(Evaluacion::class);
    }
}
