<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Potrero extends Model
{
    protected $table = 'potreros';
    protected $primaryKey = 'ID_potrero';
    public $timestamps = false;

    public function predio()
    {
        return $this->belongsTo(Predio::class, 'ID_Predio');

    }

    public function disponibilidades()
    {
        return $this->hasMany(Disponibilidad::class, $this->primaryKey);

    }
}
