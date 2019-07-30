<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disponibilidad extends Model
{
    protected $table = 'disponibilidads';
    public $timestamps = false;


    public function potreros()
    {
        return $this->belongsTo(Potrero::class, 'ID_potrero');

    }
}
