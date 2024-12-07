<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('anggotas')->insert([
            'Nama' => "H. Akhmad Ripai Subroto, M.Pd",
            'Username' => "ripai",
            'password' => Hash::make('12345678'),
            'Jabatan' => "Ketua Pengurus",
        ]);
        DB::table('anggotas')->insert([
            'Nama' => "Ahmad Rosyid Ganausi",
            'Username' => "Ganausi",
            'password' => Hash::make('12345678'),
            'Jabatan' => "admin",
        ]);
        DB::table('t_t_d_s')->insert([
            'Gambar' => "noTTD.png",
            'anggota_id' => 1,
        ]);
        DB::table('t_t_d_s')->insert([
            'Gambar' => "noTTD.png",
            'anggota_id' => 2,
        ]);
    }
}
