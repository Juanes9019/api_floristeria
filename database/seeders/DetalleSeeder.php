<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalle')->insert([
            'id_pedido' => 1, 
            'id_producto' => 1, 
            'precio' => 150000,
            'cantidad' => 1,
            'importe' => 150000,
            'subtotal' => 135000,
            'impuesto' => 15000,
            'imagen' => 'https://floristeria.s3.sa-east-1.amazonaws.com/arreglo_1.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detalle')->insert([
            'id_pedido' => 2, 
            'id_producto' => 2, 
            'precio' => 230000,
            'cantidad' => 1,
            'importe' => 230000,
            'subtotal' => 207000,
            'impuesto' => 23000,
            'imagen' => 'https://floristeria.s3.sa-east-1.amazonaws.com/arreglo_2.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
