<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "role" => 'admin',
            "name"  => 'tere',
            "surname"   => 'melero',
            "nick" => 'therhessa',
            "email"  => 'admin@admin.com',
            "image"=> '',
            "password"=>bcrypt('administradora')
        ]);
       
    }
}
