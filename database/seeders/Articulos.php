<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class Articulos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $datos =[
            [
                'referencia' => '2023',
                'nombre' => 'Camiseta',
                'descripcion' => 'Tela frio',
                'color' => 'Negro',
                'precioUnitario' => '55000',
                'observacion' => 'Lavar a mano',
                'foto' => 'camiseta.png',
                'marca' => '003'
            ],

            [
                'referencia' => '2024',
                'nombre' => 'Pantaloneta',
                'descripcion' => 'Corta',
                'color' => 'Azul',
                'precioUnitario' => '35000',
                'observacion' => 'Secar a sombra',
                'foto' => 'pantaloneta.png',
                'marca' => '001'
            ],

            [
                'referencia' => '2025',
                'nombre' => 'Gorra',
                'descripcion' => 'Tela suave',
                'color' => 'Blanco',
                'precioUnitario' => '80000',
                'observacion' => 'No doblar',
                'foto' => 'gorra.png',
                'marca' => '002'
            ],

            [
                'referencia' => '2026',
                'nombre' => 'Chaquetas',
                'descripcion' => 'Algodon 100%',
                'color' => 'Vinotinto',
                'precioUnitario' => '250000',
                'observacion' => 'Lavar con agua tibia',
                'foto' => 'chaqueta.png',
                'marca' => '004'
            ],

            [
                'referencia' => '2027',
                'nombre' => 'Guayos',
                'descripcion' => 'Tacha de acero',
                'color' => 'Amarillo',
                'precioUnitario' => '300000',
                'observacion' => 'Material sintetico',
                'foto' => 'guayos.png',
                'marca' => '005'
            ],
        ];

        DB::table('articulo')->insert($datos);
    }
}
