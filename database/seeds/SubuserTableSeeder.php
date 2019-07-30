<?php

use Illuminate\Database\Seeder;
use App\Subuser;

class SubuserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subuser::create([
            'RUT_subusuario' => '17719909-5',
            'Password' => '1234',
            'Username' => 'Victor',
            'Firstname' => 'Victor',
            'Lastname' => 'Saldivia',
            'email' => 'victor@gmail.com',
            'RUT_usuario' => '17654123-3',

        ]);

        Subuser::create([
            'RUT_subusuario' => '10200900-0',
            'Password' => '1234',
            'Username' => 'Dario',
            'Firstname' => 'Dario',
            'Lastname' => 'Rojas',
            'email' => 'dario@gmail.com',
            'RUT_usuario' => '17654123-3',

        ]);

        Subuser::create([
            'RUT_subusuario' => '7200200-5',
            'Password' => '1234',
            'Username' => 'Celeste',
            'Firstname' => 'Celeste',
            'Lastname' => 'Hormazabal',
            'email' => 'celeste@gmail.com',
            'RUT_usuario' => '8279994-9',

        ]);
    }
}
