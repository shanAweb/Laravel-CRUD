<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
          \DB::table('users')->insert([
            'name' => \Str::random(10),
            'email' => \Str::random(10).'@yahoo.com',
            'password' => \Hash::make('password'),
        ]);

    }
}
