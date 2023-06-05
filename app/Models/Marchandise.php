<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marchandise extends Model
{
    use HasFactory;
    public function affectation(){
        return $this->hasMany(Marchandise::class, 'marchandise_id', 'id');
    }
}
