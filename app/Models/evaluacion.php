<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluacion extends Model
{
    use HasFactory;
    public function materia() {
        return $this->hasOne('App/Models/Materia');
    }
}
