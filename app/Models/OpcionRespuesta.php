<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpcionRespuesta extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'puntuacion'];
    protected $table = 'opcion_respuesta';

    public function pregunta(){
        return $this->belongsTo(Pregunta::class);
    }
}
