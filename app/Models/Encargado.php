<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','cargo', 'sucursal'];
    protected $table = 'encargado';

    public function evaluaciones(){
        return $this->hasMany(Evaluacion::class);
    }
}
