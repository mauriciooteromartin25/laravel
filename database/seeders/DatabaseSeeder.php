<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\PostMOM;
use App\Models\UserMOM;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear 5 usuarios
        UserMOM::factory(5)
            ->create()
            ->each(function ($user) {
                // Crear 3 publicaciones por cada usuario
                PostMOM::factory(3)->create([
                    'user_id' => $user->id,
                ]);
            });

        // Mensaje de confirmación
        $this->command->info('✓ Se han creado 5 usuarios con 3 publicaciones cada uno.');
        $this->command->info('✓ Total: 5 usuarios y 15 publicaciones.');
    }
}
