<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FormaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $formasPago = [
            [
                'nombre' => 'CHEQUE',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'EFECTIVO',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'SPEI',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'SPID',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'TARJETA DE DÉBITO',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'TARJETA DE CRÉDITO',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'TEF',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
            [
                'nombre' => 'MSI',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL
            ],
        ];

        DB::table('formapago')->insert($formasPago);
    }
}
