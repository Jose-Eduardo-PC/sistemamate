<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_curso extends Model
{
    use HasFactory;
    public function usuario() {
        return $this->belongsTo('App/Models/Usuario');
    }
    public function curso() {
        return $this->belongsTo('App/Models/Curso');
    }
}
