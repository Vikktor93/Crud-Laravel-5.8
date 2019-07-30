<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    protected $table = 'predios';
    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo(User::class, 'RUT_usuario');

    }

    public function subusers()
    {
        return $this->belongsToMany(Subuser::class, 'predio_subusers', 'ID_Predio', 'RUT_subusuario');

    }

    public function potreros() {
        return $this->hasMany(Potreros::class);
    }
}
