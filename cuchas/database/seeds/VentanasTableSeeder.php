<?php

use Illuminate\Database\Seeder;

class VentanasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('ventanas')->insert([
        [
            "name"=>"ventana",
            "value"=>"redonda",
            "title"=>"100",
            "text"=>"Redonda",
        ],
        [
          "name"=>"ventana",
          "value"=>"cuadrada",
          "title"=>"100",
          "text"=>"Cuadrada",
      ],
      [
        "name"=>"ventana",
        "value"=>"ninguna",
        "title"=>"0",
        "text"=>"Ninguna",
      ],
    ]);
    }
}
