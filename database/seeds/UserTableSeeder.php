<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'RUT_usuario' => '17654123-3',
            'Username' => 'Armando',
            'Firstname' => 'Armando',
            'Lastname' => 'Lopez',
            'email' => 'armando@gmail.com',
            'Password' => '1234',

        ]);

        User::create([
            'RUT_usuario' => '8279994-9',
            'Username' => 'Pedro',
            'Firstname' => 'Pedro',
            'Lastname' => 'Alvarez',
            'email' => 'pedro@gmail.com',
            'Password' => '1234',

        ]);
    }
}
