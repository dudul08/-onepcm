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
            'password'=>'admin'
        ]);
        $enfant = DB::table('users')->insert([
            'name'=>'enfant',
            'email'=>'enfant@enfant.fr',
            'password'=>'enfant'
        ]);
    }
}
