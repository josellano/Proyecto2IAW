<?php

use Illuminate\Database\Seeder;

class TamanosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tamanos')->insert([
        [
            "name"=>"tamaño",
            "value"=>"chica",
            "title"=>"100",
            "text"=>"Chica(0.8m x 0.5m)",
        ],
        [
          "name"=>"tamaño",
          "value"=>"mediana",
          "title"=>"200",
          "text"=>"Mediana(1m x 0.6m)",
      ],
      [
        "name"=>"tamaño",
        "value"=>"grande",
        "title"=>"300",
        "text"=>"Grande(1.2m x 0.8m)",
      ],

      ]);
    }
}
