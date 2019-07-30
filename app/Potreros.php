<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Potreros extends Model
{
    public $timestamps = false;

    public function disponibilidad()
    {
        return $this->hasMany(Disponibilidad::class);

    }

    public function predio()
    {
        return $this->belongsTo(Predio::class);

    }
}
