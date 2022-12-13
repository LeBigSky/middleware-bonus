<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      
        DB::table('users')->insert([
            ['name'=> 'Gary',
            'age'=> 37,
            'email'=> 'admin@mem.com',
            'role_id'=> 1,
            'password'=> Hash::make('mem@mem.com'),],
            ['name'=> 'membre',
            'age'=> 30,
            'email'=> 'mem@mem.com',
            'role_id'=> 2,
            'password'=> Hash::make('mem@mem.com'),],
             ['name'=> 'meca',
             'age'=> 25,
            'email'=> 'meca@mem.com',
            'role_id'=> 3,
            'password'=> Hash::make('mem@mem.com'),]
        ]);
    }
}
