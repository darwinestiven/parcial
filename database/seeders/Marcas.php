<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Marcas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'idMarca' => '001',
                'descripcion' => 'Reebok'
            ],

            [
                'idMarca' => '002',
                'descripcion' => 'Adidas'
            ],

            [
                'idMarca' => '003',
                'descripcion' => 'Nike'
            ],

            [
                'idMarca' => '004',
                'descripcion' => 'Puma'
            ],

            [
                'idMarca' => '005',
                'descripcion' => 'Jordan'
            ],
        ];
        DB::table('marca')->insert($datos);
    }
}
