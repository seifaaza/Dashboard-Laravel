<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porte extends Model
{
    use HasFactory;

    public function porte(){
        return $this->hasMany(Porte::class, 'porte_id', 'id');
    }
}
