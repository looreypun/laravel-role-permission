<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'sherpa', 'email' => 'sherpa.developer@itsherpa.com', 'password' => Hash::make('itsherpa'), 'created_at' => '2023-07-25 03:06:47', 'updated_at' => '2023-07-25 03:06:47'],
            ['id' => 2, 'name' => 'user', 'email' => 'user.developer@itsherpa.com', 'password' => Hash::make('itsherpa'), 'created_at' => '2023-07-25 03:58:20', 'updated_at' => '2023-07-25 03:58:20'],
            ['id' => 3, 'name' => 'partimer', 'email' => 'partimer.developer@itsherpa.com', 'password' => Hash::make('itsherpa'), 'created_at' => '2023-07-25 03:58:47', 'updated_at' => '2023-07-25 03:58:47'],
        ]);
    }
}
