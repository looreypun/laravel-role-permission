<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([
            ['id' => 1, 'name' => 'profile', 'guard_name' => 'web', 'created_at' => '2023-07-25 03:52:42', 'updated_at' => '2023-07-25 03:52:42'],
            ['id' => 2, 'name' => 'pages', 'guard_name' => 'web', 'created_at' => '2023-07-25 03:52:59', 'updated_at' => '2023-07-25 03:52:59'],
            ['id' => 3, 'name' => 'password', 'guard_name' => 'web', 'created_at' => '2023-07-25 03:53:08', 'updated_at' => '2023-07-25 03:53:08'],
        ]);
    }
}
