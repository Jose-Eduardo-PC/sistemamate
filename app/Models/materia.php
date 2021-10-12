<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    use HasFactory;
    public function tema() {
        return $this->HasMany('App/Models/tema');
    }

    public function curso() {
        return $this->belongsTo('App/Models/curso');
    }
}
