<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(TamanosTableSeeder::class);
         $this->call(MaterialesTableSeeder::class);
         $this->call(VentanasTableSeeder::class);
         $this->call(EstilosTableSeeder::class);
         $this->call(FormasTableSeeder::class);

    }
}
