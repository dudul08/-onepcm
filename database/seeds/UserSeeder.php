<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory('App\User')->create();
        $parent = DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@admin.fr',
            'password'=>\Illuminate\Support\Facades\Hash::make('admin'),
            'is_admin'=>true,
            'prenom'=>'admin',
            'date_naissance'=>'1976-10-16',
            'genre'=>'1'

        ]);
        $enfant = DB::table('users')->insert([
            'name'=>'enfant',
            'email'=>'enfant@enfant.fr',
            'password'=>\Illuminate\Support\Facades\Hash::make('enfant'),
            'is_admin'=>false,
            'prenom'=>'enfant',
            'date_naissance'=>'2007-08-20',
            'genre' => '0'
        ]);
    }
}
