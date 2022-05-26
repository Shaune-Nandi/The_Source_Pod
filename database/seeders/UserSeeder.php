<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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
            'first_name' => 'Shaune',
            'last_name' => 'Nandi',
            'email' => 'shaunenandi27@gmail.com',
            'role_id' => 1,
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);      
        
        DB::table('users')->insert([
            'first_name' => 'John',
            'last_name' => 'Mark',
            'email' => 'johnmark@gmail.com',
            'role_id' => 2,
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Peter',
            'last_name' => 'Kenneth',
            'email' => 'paterkeneth@gmail.com',
            'role_id' => 2,
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
