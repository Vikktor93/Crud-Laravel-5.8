<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(SubuserTableSeeder::class);
        $this->call(PredioTableSeeder::class);
        $this->call(PotrerosTableSeeder::class);
        $this->call(DisponibilidadTableSeeder::class);
        $this->call(PredioSubuserTableSeeder::class);
    }
}
