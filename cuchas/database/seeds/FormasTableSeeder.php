<?php

use Illuminate\Database\Seeder;

class FormasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('formas')->insert([
        [
            "name"=>"forma",
            "value"=>"un agua",
            "title"=>"100",
            "text"=>"Un agua",
        ],
        [
          "name"=>"forma",
          "value"=>"dos aguas",
          "title"=>"200",
          "text"=>"Dos aguas",
      ],
    ]);
    }
}
