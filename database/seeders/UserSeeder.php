<?php

namespace Database\Seeders;

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
        \App\Models\User::insert([
            [
                'name'=>'Nadia',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('admin'),
                'role'=>'Administrator',
                'gambar'=>'images/team-img-02.JPG',
            ],
            [
                'name'=>'Tita',
                'email'=>'operator@admin.com',
                'password'=>bcrypt('operator'),
                'role'=>'Operator',
                'gambar'=>'images/team-img-04.JPG',
            ],
            [
                'name'=>'Justin',
                'email'=>'peminjam@admin.com',
                'password'=>bcrypt('peminjam'),
                'role'=>'Peminjam',
                'gambar'=>'images/foto.JPG',
            ],
        ]);
    }
}
