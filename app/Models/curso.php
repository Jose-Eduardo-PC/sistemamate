<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;
    public function materia() {
        return $this->HasMany('App/Models/materia');
    }
    public function usuario_curso() {
        return $this->hasMany('App/Models/user_curso');
    }
}
