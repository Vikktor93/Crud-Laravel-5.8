<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Rut_usuario', 'Username', 'Firstname', 'Lastname', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $primaryKey = 'RUT_usuario';
    protected $keyType = 'string';
    public $timestamps = false;

    public function subusers()
    {
        return $this->hasMany(Subuser::class, $this->primaryKey);
    }

    public function predios() {
        return $this->hasMany(Predio::class, $this->primaryKey);
    }
}
