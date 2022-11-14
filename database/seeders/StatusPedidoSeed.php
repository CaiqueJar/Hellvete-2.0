<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusPedidoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbstatuspedido')->insert(
            array(
                [
                    'status' => 'CARRINHO',
                ],
                [
                    'status' => 'CONFIRMADO',
                ]
            )
        );
    }
}
