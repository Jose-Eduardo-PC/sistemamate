<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tema extends Model
{
    use HasFactory;
    public function actividades() {
        return $this->hasMany('App/Models/actividades');   
    }
    public function materia() {
        return $this->belongsTo('App/Models/materia');   
    }
    public function evaluacion() {
        return $this->hasOne('App/Models/evaluacion');
}
}
