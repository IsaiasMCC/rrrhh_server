<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion'];
    protected $table = 'pregunta';

    public function categoria_evaluacion(){
        return $this->belongsTo(CategoriaEvaluacion::class);
    }
    public function opciones_respuesta(){
        return $this->hasMany(OpcionRespuesta::class);
    }
    public function respuestas(){
        return $this->hasOne(Respuesta::class);
    }
}
