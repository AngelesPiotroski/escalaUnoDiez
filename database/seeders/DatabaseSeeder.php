<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('a123456789b'),
        ]);
        // Llamar al seeder de Proveedores para ejecutar su seed
        $this->call(ProveedoresSeeder::class);
        $this->call(EstadoObraSeeder::class);
        $this->call(FormaPagoSeeder::class);
        $this->call(MaterialesSeeder::class);
        $this->call(PaisesSeeder::class);
        $this->call(ServiciosTableSeeder::class);
        $this->call(UnidadSeeder::class);
    }
}
