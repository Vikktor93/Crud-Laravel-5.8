<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disponibilidad extends Model
{
    protected $table = 'disponibilidads';
    public $timestamps = false;


    public function potrero()
    {
        return $this->belongsTo(Potreros::class, 'ID_potrero');

    }
}
