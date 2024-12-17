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
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id_user' => '001',
                'nama' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
