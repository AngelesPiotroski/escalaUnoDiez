<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EstadoObraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = [
            [
                'nombre' => 'Activo',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'Pendiente',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'Cancelada',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'Vencida',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
        ];

        foreach ($estados as $estado) {
            DB::table('estadoobra')->insert($estado);
        }
    }
}
