<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UnidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unidades = [
            [
                'nombre' => 'Pieza',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'Kg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'Bulto',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => 2,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'Viaje',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'M',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
        ];

        DB::table('unidad')->insert($unidades);
    }
}
