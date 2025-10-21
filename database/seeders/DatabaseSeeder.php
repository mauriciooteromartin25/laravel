<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto_MOM;

class DatabaseSeeder extends Seeder
{
    /**
     * Ejecutar los seeders de la base de datos.
     */
    public function run(): void
    {
        Producto_MOM::create([
            'nombre' => 'Ratón Inalámbrico',
            'descripcion' => 'Ratón ergonómico con conexión Bluetooth y batería recargable.',
            'precio' => 29.99,
            'stock' => 20,
        ]);

        Producto_MOM::create([
            'nombre' => 'Teclado Compacto',
            'descripcion' => 'Teclado compacto USB con teclas silenciosas y diseño minimalista.',
            'precio' => 39.50,
            'stock' => 15,
        ]);
    }
}


