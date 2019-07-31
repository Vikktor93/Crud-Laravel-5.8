<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    protected $table = 'predios';
    protected $primaryKey = 'ID_Predio';
    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo(User::class, 'RUT_usuario');

    }

    public function subusers()
    {
        return $this->belongsToMany(Subuser::class, 'predio_subusers', $this->primaryKey, 'RUT_subusuario');

    }

    public function potreros() {
        return $this->hasMany(Potreros::class);
    }
}
