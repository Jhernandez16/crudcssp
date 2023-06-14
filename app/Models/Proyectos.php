<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;

    public function nivel(){
        return $this->belongsTo(nivel::class, 'nivel_id', 'id');
    }
}
