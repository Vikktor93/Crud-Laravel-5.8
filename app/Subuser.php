<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Subuser extends Model
{
    protected $table = 'subusers';
    protected $primaryKey = 'RUT_subusuario';
    protected $keyType = 'string';
    //protected $fillable = ['Rut_subusuario', 'Password', 'Username', 'Firstname', 'Lastname', 'email', 'RUT_usuario'];
    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo(User::class, $this->primaryKey);
    }

    public function predios()
    {
        return $this->belongsToMany(Predio::class, 'predio_subusers', $this->primaryKey, 'ID_Predio');
    }
}
