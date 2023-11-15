<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Achmad Vandy ',
            'email' => 'vandbree28@gmail.com',
            'password' => bcrypt('vandy280203'),
            'prodi' => 'D3-MI PSDKU Kediri',
            'nim' => '2131730094',
            'tgl' => '2023-11-12',            
        ]);
    }
}
