<?php

use Illuminate\Database\Seeder;
use App\Disponibilidad;

class DisponibilidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Disponibilidad::create([
            'id' => 1,
            'fecha' => date('2019-05-22'),
            'ndvi' => 10,
            'ID_potrero' => 1

        ]);

        Disponibilidad::create([
            'id' => 2,
            'fecha' => date('2019-01-20'),
            'ndvi' => 20,
            'ID_potrero' => 2

        ]);

        Disponibilidad::create([
            'id' => 3,
            'fecha' => date('2019-02-28'),
            'ndvi' => 30,
            'ID_potrero' => 3

        ]);

        Disponibilidad::create([
            'id' => 4,
            'fecha' => date('2018-12-01'),
            'ndvi' => 1,
            'ID_potrero' => 4

        ]);
    }
}
