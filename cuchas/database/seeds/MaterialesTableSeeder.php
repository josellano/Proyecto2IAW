<?php

use Illuminate\Database\Seeder;

class MaterialesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('materiales')->insert([
        [
            "name"=>"material",
            "value"=>"madera",
            "title"=>"150",
            "text"=>"Madera",
            "src"=>"source/madera.jpg",
        ],
        [
          "name"=>"material",
          "value"=>"chapa",
          "title"=>"100",
          "text"=>"Chapa",
          "src"=>"source/chapa.jpg",
      ],
      [
        "name"=>"material",
        "value"=>"fibra",
        "title"=>"200",
        "text"=>"Fibra de vidrio",
        "src"=>"source/fibra.jpg",
      ],
      [
        "name"=>"material",
        "value"=>"plastico",
        "title"=>"50",
        "text"=>"Plastico",
        "src"=>"source/plastico.jpg",
      ],

      ]);
    }
}
