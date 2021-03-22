<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'watson',
            'name' => 'Administrator Watson',
            'email' => 'ame.wat@gmail.com',
            'password'=>Hash::make('password')
        ]);
    }
}
