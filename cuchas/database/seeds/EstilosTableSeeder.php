<?php

use Illuminate\Database\Seeder;

class EstilosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('estilos')->insert([
        [
            "class"=>"2colores",
            "name"=>"estilo",
            "value"=>"rayado",
            "title"=>"200",
            "text"=>"Rayado",
        ],
        [
          "class"=>"1color",
          "name"=>"estilo",
          "value"=>"rayado",
          "title"=>"150",
          "text"=>"Plano",
      ],
    ]);
    }
}
