<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\MOUser;
use App\Models\MOPost;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
    
        $user1 = MOUser::create([
            'name' => 'Mauricio Otero',
            'email' => 'mauricio@example.com',
            'password' => bcrypt('password123'),
        ]);

        $user2 = MOUser::create([
            'name' => 'Adrian Menor',
            'email' => 'adrian@example.com',
            'password' => bcrypt('password123'),
        ]);

        $user3 = MOUser::create([
            'name' => 'Ruben Vazquez',
            'email' => 'ruben@example.com',
            'password' => bcrypt('password123'),
        ]);

        $user4 = MOUser::create([
            'name' => 'Sofia Rodriguez',
            'email' => 'sofia@example.com',
            'password' => bcrypt('password123'),
        ]);

        $user5 = MOUser::create([
            'name' => 'Diego Martinez',
            'email' => 'diego@example.com',
            'password' => bcrypt('password123'),
        ]);

        $user6 = MOUser::create([
            'name' => 'Elena Sanchez',
            'email' => 'elena@example.com',
            'password' => bcrypt('password123'),
        ]);

        MOPost::create([
            'user_id' => $user1->id,
            'title' => 'Introducción a Laravel',
            'content' => 'Laravel es un framework PHP moderno y elegante que facilita el desarrollo web. En este artículo veremos los conceptos básicos y cómo empezar.',
            'published_at' => now()->subDays(10),
            'is_published' => true,
        ]);

        MOPost::create([
            'user_id' => $user1->id,
            'title' => 'Relaciones Eloquent',
            'content' => 'Las relaciones en Eloquent son una forma poderosa de interactuar con datos relacionados en la base de datos. Aprenderemos sobre hasMany, belongsTo, hasOne y muchas más.',
            'published_at' => now()->subDays(5),
            'is_published' => true,
        ]);

        MOPost::create([
            'user_id' => $user1->id,
            'title' => 'Migraciones en Laravel',
            'content' => 'Las migraciones permite mantener el control de versiones de la estructura de la base de datos.',
            'published_at' => null,
            'is_published' => false,
        ]);

        MOPost::create([
            'user_id' => $user2->id,
            'title' => 'Componentes Blade',
            'content' => 'Los componentes Blade nos permiten reutilizar código y crear interfaces más limpias y mantenibles.',
            'published_at' => now()->subDays(3),
            'is_published' => true,
        ]);

        MOPost::create([
            'user_id' => $user2->id,
            'title' => 'Testing en Laravel',
            'content' => 'Las pruebas automáticas son fundamentales para garantizar la calidad del código. Laravel proporciona herramientas potentes para testing.',
            'published_at' => now()->subDays(1),
            'is_published' => true,
        ]);

        MOPost::create([
            'user_id' => $user3->id,
            'title' => 'API REST con Laravel',
            'content' => 'Construir una API REST moderna con Laravel es simple y poderoso. Usaremos controladores, rutas y validación.',
            'published_at' => now(),
            'is_published' => true,
        ]);

        MOPost::create([
            'user_id' => $user3->id,
            'title' => 'Seguridad en Laravel',
            'content' => 'Protege tu aplicación con las mejores prácticas de seguridad. Laravel proporciona herramientas para prevenir vulnerabilidades comunes.',
            'published_at' => now()->subDays(2),
            'is_published' => true,
        ]);

        MOPost::create([
            'user_id' => $user4->id,
            'title' => 'Manejo de Errores',
            'content' => 'Aprende a manejar excepciones y errores de forma efectiva en Laravel.',
            'published_at' => now()->subDays(7),
            'is_published' => true,
        ]);

        MOPost::create([
            'user_id' => $user4->id,
            'title' => 'Deployment de Aplicaciones',
            'content' => 'Guía completa para desplegar tu aplicación Laravel en producción de forma segura.',
            'published_at' => now()->subDays(4),
            'is_published' => true,
        ]);

        MOPost::create([
            'user_id' => $user5->id,
            'title' => 'Caching en Laravel',
            'content' => 'Mejora el rendimiento de tu aplicación usando cachés efectivamente.',
            'published_at' => now()->subDays(8),
            'is_published' => true,
        ]);

        MOPost::create([
            'user_id' => $user5->id,
            'title' => 'Validación de Datos',
            'content' => 'Técnicas avanzadas de validación para garantizar la integridad de tus datos.',
            'published_at' => now()->subDays(6),
            'is_published' => true,
        ]);

    }
}
