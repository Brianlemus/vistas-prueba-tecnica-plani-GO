<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $table = 'materias';
    protected $guarded = ['id'];

    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'idProfesor');
    }
}
