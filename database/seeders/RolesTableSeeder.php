<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['id' => 1, 'name' => '管理者', 'guard_name' => 'web', 'created_at' => '2023-07-25 03:52:07', 'updated_at' => '2023-07-25 03:52:07'],
            ['id' => 2, 'name' => 'ユーザー', 'guard_name' => 'web', 'created_at' => '2023-07-25 03:52:17', 'updated_at' => '2023-07-25 03:52:17'],
            ['id' => 3, 'name' => 'アルバイト', 'guard_name' => 'web', 'created_at' => '2023-07-25 03:52:24', 'updated_at' => '2023-07-25 03:52:24'],
        ]);
    }
}
