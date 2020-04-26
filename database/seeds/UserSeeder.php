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
            'name' => 'admin',
            'email' => 'admin@admin.fr',
            'password' => \Illuminate\Support\Facades\Hash::make('nippusg'),
            'is_admin' => true,
            'prenom' => 'admin',
            'date_naissance' => '1976-10-16',
            'genre' => '1',
            'pseudo' => 'admin'

        ]);
        $parent = DB::table('users')->insert([
            'name' => 'SUPPIN',
            'email' => 'admin@admin.fr',
            'password' => \Illuminate\Support\Facades\Hash::make('nippusg'),
            'is_admin' => true,
            'prenom' => 'Guillaume',
            'date_naissance' => '1976-10-16',
            'genre' => '1',
            'pseudo' => 'papounet'

        ]);
        $parent = DB::table('users')->insert([
            'name' => 'SUPPIN',
            'email' => 'admin@admin.fr',
            'password' => \Illuminate\Support\Facades\Hash::make('nippusg'),
            'is_admin' => true,
            'prenom' => 'Laure',
            'date_naissance' => '1976-05-16',
            'genre' => '0',
            'pseudo' => 'mamounette'

        ]);
        $enfant = DB::table('users')->insert([
            'name' => 'SUPPIN',
            'email' => 'enfant@enfant.fr',
            'password' => \Illuminate\Support\Facades\Hash::make('300708@'),
            'is_admin' => false,
            'prenom' => 'Elise',
            'date_naissance' => '2008-07-30',
            'genre' => '0',
            'pseudo' => 'lili'
        ]);
        $enfant = DB::table('users')->insert([
            'name' => 'SUPPIN',
            'email' => 'enfant@enfant.fr',
            'password' => \Illuminate\Support\Facades\Hash::make('200407@'),
            'is_admin' => false,
            'prenom' => 'Baptiste',
            'date_naissance' => '2007-04-20',
            'genre' => '1',
            'pseudo' => 'baptou'
        ]);
    }
}
