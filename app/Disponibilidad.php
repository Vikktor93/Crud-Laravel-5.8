<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disponibilidad extends Model
{
    public $timestamps = false;
    protected $dates = [
        'fecha'
    ];
    protected $casts = [
        'fecha' => 'datetime:YY-MM-DD',
    ];


    public function potrero()
    {
        return $this->belongsTo(Potreros::class);

    }
}
