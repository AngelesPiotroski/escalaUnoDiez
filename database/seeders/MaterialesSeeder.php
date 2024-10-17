<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MaterialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materiales = [
            [
                'nombre' => 'Alambre',
                'precioNormal' => 23,
                'idUnidad' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'Alambron',
                'precioNormal' => 20,
                'idUnidad' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'Arena',
                'precioNormal' => 1100,
                'idUnidad' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'Arenilla',
                'precioNormal' => 0,
                'idUnidad' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'Armex 15-15',
                'precioNormal' => 133,
                'idUnidad' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'Armex 15-20',
                'precioNormal' => 136,
                'idUnidad' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'BARROTES',
                'precioNormal' => 30,
                'idUnidad' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'Cal',
                'precioNormal' => 1960,
                'idUnidad' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'Caseton 60*60*25',
                'precioNormal' => 78.3,
                'idUnidad' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'Cemento',
                'precioNormal' => 3100,
                'idUnidad' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'Clavo 2.5',
                'precioNormal' => 27,
                'idUnidad' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            // ... (Agrega los demás materiales aquí con el mismo formato)
        ];

        DB::table('material')->insert($materiales);
    }
}
