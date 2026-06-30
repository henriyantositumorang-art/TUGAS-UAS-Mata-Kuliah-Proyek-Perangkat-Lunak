<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed the default mock user
        User::updateOrCreate(
            ['email' => 'henriyanto.situmorang@kreditplus.com'],
            [
                'name' => 'HENRIYANTO SITUMORANG',
                'password' => bcrypt('password123'),
            ]
        );

        // Call Sbo and Informasi seeders
        $this->call([
            SboDataSeeder::class,
            InformasiCollectionSeeder::class,
        ]);
    }
}
