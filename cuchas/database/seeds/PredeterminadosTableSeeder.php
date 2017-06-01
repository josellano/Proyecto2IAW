<?php

use Illuminate\Database\Seeder;

class PredeterminadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cuchas')->insert([
        [
          "email"=>"",
          "tamaño"=>"chica",
          "material"=>"madera",
          "ventana"=>"redonda",
          "estilo"=>"plano",
          "colorPared1"=>"#abcdef",
          "colorPared2"=>"#fedcba",
          "forma"=>"un agua",
          "colorTecho"=>"#cbafed",
          "predet"=>"1",
        ],
        [
          "email"=>"",
          "tamaño"=>"grande",
          "material"=>"chapa",
          "ventana"=>"cuadrada",
          "estilo"=>"plano",
          "colorPared1"=>"#aaaaaa",
          "colorPared2"=>"#aaaaaa",
          "forma"=>"un agua",
          "colorTecho"=>"#eeeeee",
          "predet"=>"1",
      ],
    ]);
    }
}
