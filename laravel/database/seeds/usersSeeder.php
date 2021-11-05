<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        /*
         $user= DB::table('users')->insert([

            "name"  => 'tere',
            "surname"   => 'melero',
            "nick" => 'therhessa',
            "email"  => 'admin@admin.com',
            "image"=> '',
            "password"=>bcrypt('administradora')
        ]);
        $user= DB::table('users')->insert([

            "name"  => 'Juan',
            "surname"   => 'Sanchez',
            "nick" => 'juanito',
            "email"  => 'admin1@admin.com',
            "image"=> '',
            "password"=>bcrypt('administrador')

        ]);
*/
/*
        DB::table('role_user')->insert([
            'role_id' =>1,
            'user_id' =>1,
            'role_id' =>2,
            'user_id' =>2,


        ]);

*/
$role_user = Role::where('name', 'user')->first();
$role_admin = Role::where('name', 'admin')->first();

$user = new User();
$user->name = 'tere';
$user->surname = 'melero';
$user->nick = 'therhessa';
$user->email = 'admin@admin.com';
$user->image = '';
$user->password =bcrypt('administradora');
$user->save();
$user->roles()->attach($role_user);

$user = new User();
$user->name = 'juan';
$user->surname = 'sanchez';
$user->nick = 'juanito';
$user->email = 'admin1@admin.com';
$user->image = '';
$user->password =bcrypt('administrador');
$user->save();
$user->roles()->attach($role_admin);


    }
}
