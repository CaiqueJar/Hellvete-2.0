<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbcliente')->insert(
            array([
                'nomeCliente' => 'Caique',
                'dtNascCliente' => '2004-09-20 00:00:00',
                'estadoCivilCliente' => 'Solteiro',
                'enderecoCliente' => 'Rua Engenheiro Ernani Cotrin',
                'numeroCliente' => '10',
                'cepCliente' => '08410450',
                'cidadeCliente' => 'São Paulo',
                'estadoCliente' => 'SP',
                'rgCliente' => '123123',
                'cpfCliente' => '51657882888',
                'emailCliente' => 'caiquedm11@gmail.com',
                'foneCliente' => '1125539224',
                'celularCliente' => '11958595849',
                'senhaCliente' => password_hash('123', PASSWORD_DEFAULT)
            ],
            [
                'nomeCliente' => 'Athirson',
                'dtNascCliente' => '2003-02-12 00:00:00',
                'estadoCivilCliente' => 'Casado',
                'enderecoCliente' => 'Rua Engenheiro Ernani Cotrin',
                'numeroCliente' => '10',
                'cepCliente' => '08410450',
                'cidadeCliente' => 'São Paulo',
                'estadoCliente' => 'SP',
                'rgCliente' => '123123',
                'cpfCliente' => '51657882888',
                'emailCliente' => 'athirson@gmail.com',
                'foneCliente' => '1125539224',
                'celularCliente' => '11958595849',
                'senhaCliente' => password_hash('123', PASSWORD_DEFAULT)
            ],
            [
                'nomeCliente' => 'Bruno',
                'dtNascCliente' => '2005-12-05 00:00:00',
                'estadoCivilCliente' => 'Solteiro',
                'enderecoCliente' => 'Rua Engenheiro Ernani Cotrin',
                'numeroCliente' => '10',
                'cepCliente' => '08410450',
                'cidadeCliente' => 'São Paulo',
                'estadoCliente' => 'SP',
                'rgCliente' => '123123',
                'cpfCliente' => '51657882888',
                'emailCliente' => 'bruno@gmail.com',
                'foneCliente' => '1125539224',
                'celularCliente' => '11958595849',
                'senhaCliente' => password_hash('123', PASSWORD_DEFAULT)
            ]
            )
        );
    }
}
