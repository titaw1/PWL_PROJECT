<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert(
            [
                'name'=>'Nadia',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('admin'),
                'role'=>'Administrator'
            ],
            [
                'name'=>'Tita',
                'email'=>'operator@admin.com',
                'password'=>bcrypt('operator'),
                'role'=>'Operator'
            ],
            [
                'name'=>'Justin',
                'email'=>'peminjam@admin.com',
                'password'=>bcrypt('peminjam'),
                'role'=>'Peminjam'
            ],
        );
    }
}
