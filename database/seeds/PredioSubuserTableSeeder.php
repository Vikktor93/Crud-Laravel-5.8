<?php

use Illuminate\Database\Seeder;
use App\PredioSubuser;

class PredioSubuserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PredioSubuser::create([
            'ID_Predio' => 1,
            'RUT_subusuario' => '17719909-5'
        ]);

        PredioSubuser::create([
            'ID_Predio' => 2,
            'RUT_subusuario' => '7200200-5'
        ]);

        PredioSubuser::create([
            'ID_Predio' => 3,
            'RUT_subusuario' => '7200200-5'
        ]);

        PredioSubuser::create([
            'ID_Predio' => 4,
            'RUT_subusuario' => '17719909-5'
        ]);
    }
}
