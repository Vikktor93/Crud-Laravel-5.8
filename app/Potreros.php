<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Potreros extends Model
{
    protected $table = 'potreros';
    public $timestamps = false;

    public function predio()
    {
        return $this->belongsTo(Predio::class, 'ID_Predio');

    }

    public function disponibilidad()
    {
        return $this->hasMany(Disponibilidad::class, 'ID_potrero');

    }
}
