<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pedido')->insert([
            'user_id' => 1, 
            'total' => 150000,
            'fechapedido' => Carbon::now(),
            'procedencia' => 'web',
            'estado' => 'nuevo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('pedido')->insert([
            'user_id' => 2, 
            'total' => 230000,
            'fechapedido' => Carbon::now(),
            'procedencia' => 'app',
            'estado' => 'preparacion',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
