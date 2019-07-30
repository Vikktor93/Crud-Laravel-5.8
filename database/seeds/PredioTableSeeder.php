<?php

use Illuminate\Database\Seeder;
use App\Predio;

class PredioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Predio::create([
            'ID_Predio' => 1,
            'Localizacion' => 'Purranque',
            'RUT_usuario' => '17654123-3',
            'Rut_subusuario' => '17719909-5',

        ]);

        Predio::create([
            'ID_Predio' => 2,
            'Localizacion' => 'Purranque',
            'RUT_usuario' => '8279994-9',
            'RUT_subusuario' => '7200200-5'

        ]);

        Predio::create([
            'ID_Predio' => 3,
            'Localizacion' => 'Purranque',
            'RUT_usuario' => '8279994-9',
            'RUT_subusuario' => '7200200-5'

        ]);

        Predio::create([
            'ID_Predio' => 4,
            'Localizacion' => 'La Union',
            'RUT_usuario' => '17654123-3',
            'RUT_subusuario' => '17719909-5'

        ]);

    }
}
