<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    use HasFactory;
    protected $table = 'asignacion';
    protected $guarded = ['id'];

    public $timestamps =false;

    public function estudiantes()
    {
        return $this->belongsTo(Estudiante::class, 'idEstudiante');
    }

    public function materias()
    {
        return $this->belongsTo(Materia::class, 'idMateria');
    }
}
