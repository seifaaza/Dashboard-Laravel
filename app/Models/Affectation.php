<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;

    public function shift(){
        return $this->belongsTo(Shift::class, 'shift_id', 'id');
    }
    public function marchandise(){
        return $this->belongsTo(Marchandise::class, 'marchandise_id', 'id');
    }
    public function porte(){
        return $this->belongsTo(Porte::class, 'porte_id', 'id');
    }
}
