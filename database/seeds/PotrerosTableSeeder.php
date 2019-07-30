<?php

use Illuminate\Database\Seeder;
use App\Potrero;

class PotrerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Potrero::create([
            'ID_potrero' => '1',
            'Tipo' => 'Grande',
            'Superficie' => 50,
            'ID_Predio' => '1'

        ]);

        Potrero::create([
            'ID_potrero' => '2',
            'Tipo' => 'Grande',
            'Superficie' => 55.5,
            'ID_Predio' => 1

        ]);

        Potrero::create([
            'ID_potrero' => '3',
            'Tipo' => 'Mediano',
            'Superficie' => 25.0,
            'ID_Predio' => 1

        ]);

        Potrero::create([
            'ID_potrero' => '4',
            'Tipo' => 'Mediano',
            'Superficie' => 30.0,
            'ID_Predio' => 2

        ]);

    }
}
