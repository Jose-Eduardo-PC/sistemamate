<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actividad extends Model
{
    use HasFactory;
    public function tema() {
        return $this->belongsTo('App/Models/Tema');

        }
}
