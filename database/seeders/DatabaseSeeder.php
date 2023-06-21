<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Insert some CCTV Dummies
        DB::table('cctvs')->insert([
            [
                'status' => 'Aktif',
                'lokasi' => 'Lantai 1',
                'alamat_ip' => '10.32.45.11'
            ],
            [
                'status' => 'Aktif',
                'lokasi' => 'Lantai 2',
                'alamat_ip' => '10.32.45.9'
            ],
            [
                'status' => 'Mati',
                'lokasi' => 'Rooftop',
                'alamat_ip' => '10.32.45.76'
            ]
            ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
