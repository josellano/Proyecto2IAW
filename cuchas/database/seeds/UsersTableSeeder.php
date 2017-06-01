<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        [
            "name"=>"admin",
            "email"=>"admin@gmail.com",
            "password"=>bcrypt('admin123'),
            "type"=>"admin",
        ],
        [
        "name"=>"user",
        "email"=>"user@gmail.com",
        "password"=>bcrypt('111111'),
        "type"=>"user"
      ],
      ]);
    }
}
