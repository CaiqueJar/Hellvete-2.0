<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbcategoria')->insert(
            array([
                'categoria' => 'Disco'
            ],
            [
                'categoria' => 'Fita K7'
            ],
            [
                'categoria' => 'CD'
            ],
            [
                'categoria' => 'Roupas'
            ]
            )
        );
    }
}
