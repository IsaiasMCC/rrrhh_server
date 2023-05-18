<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionEmpleado extends Model
{
    use HasFactory;
    protected $fillable = ['evaluacion_id', 'empleado_id', 'detalle'];
    protected $table = 'evaluacion_empleado';

    public function evaluacion(){
        return $this->belongsTo(Evaluacion::class);
    }
    public function empleado(){
        return $this->belongsTo(Empleado::class);
    }
}
