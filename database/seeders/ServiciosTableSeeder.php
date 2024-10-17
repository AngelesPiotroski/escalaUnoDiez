<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicios = [
            'AIRE ACONDICIONADO',
            'ALBERCA',
            'ALUMINIO Y VIDRIO',
            'CAJA CHICA',
            'CALENTADOR SOLAR',
            'CARPINTERIA',
            'COCINA',
            'CONCRETO',
            'CURSOS Y CERTIFICACIONES',
            'ELECTRICIDAD',
            'EQUIPO DE COMPUTO',
            'EXCAVACION Y COMPACTACION',
            'FOTOGRAFIA',
            'GASOLINA',
            'GASTOS MEDICOS',
            'HERRERIA',
            'HONORARIOS',
            'IMPUESTOS Y TRAMITES LEGALES',
            'IMSS',
            'INMUEBLES',
            'LIMPIEZA',
            'MADERA',
            'MANTENIMIENTO DE VEHICULOS',
            'MATERIALES',
            'MERCADOTECNIA',
            'MATERIALES PETREOS',
            'MOBILIARIO DE OFICINA',
            'PANELES SOLARES',
            'PERSONALES',
            'JARDIN',
            'PINTURA',
            'PISO',
            'PLOMERIA',
            'PRESTACIONES A EMPLEADOS',
            'PROYECTO',
            'PUBLICIDAD',
            'RENTA',
            'RENTA DE MAQUINARIA',
            'SERVICIOS',
            'SOFTWARE',
            'SUELDO',
            'TINTA Y TONER',
            'TABIQUE Y BLOCK',
            'VENTAS',
            'YESERIA',
            'AGUA',
            'RECUBRIMIENTOS',
            'GRIFERIA',
            'COLOCACIONES',
            'DISEÑO Y MANTENIMIENTO WEB',
            'HERRAMIENTA',
            'MAQUINARIA',
            'ALBAÑILERIA',
            'CREDITO',
            'UNIFORMES',
            'VEHICULOS',
            'PAPELERIA',
            'SUMINISTROS DE OFICINA',
            'GASTOS DE REPRESENTACION',
            'TERMINACION DE OBRA',
            'ALARMAS',
            'GESTORIA',
            'CAFETERIA',
            'PRACTICANTE',
            'ESR',
            'MANTENIMIENTO',
            'MANETNIMIENTO 3',
            'COLOCACIÓN DE PISO',
            'PRESTAMO',
            'MATERIA PRIMA',
            'PAQUETERIA',
            'PLOTEO',
            'TRAMITES',
            'EMBALAJE',
            'SEGUIMIENTO DE OBRA',
            'RENDERS',
            'ENVIOS',
            'REGISTRO DE MARCA',
            'PUERTAS DE CARPINTERIA',
            'MANTENIMIENTO EQUIPO COMPUTO',
            'RENTA SANITARIO',
            'COMISION DE VENTAS',
            'IDENTIDAD CORPORATIVA',
            'HONORARIOS CONTABLES',
            'CERÁMICOS Y ACEROS',
            'PRODUCTO TEXTIL',
            'PROMOCIONALES',
            'TELCEL',
            'PIEDRA LAJA',
            'CANTERA',
            'CIMBRA',
            'GRIFERIA',
            'EQUIPOS DE COCINA',
            'MUEBLES DE BAÑO',
            'EQUIPOS HIDRAULICOS Y DE GAS',
            'INICIO DE OBRA',
            'AMAZON',
            'SUMINISTROS Y COLOCACIONES',
            'ACCESORIOS',
            'TRANSPORTE',
            'TEJA',
            'ADOQUIN',
            'CUBIERTAS DE GRANITO Y MARMOL',
            'SAT',
            'MUEBLES',
            'MUESTRARIOS',
            'TABLAROCA Y DUROCK',
        ];

        foreach ($servicios as $servicio) {
            DB::table('servicio')->insert([
                'nombre' => $servicio,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
