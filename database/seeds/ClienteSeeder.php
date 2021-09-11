<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'id'=> 1,
            'nome'  =>  'Amós',
            'email' =>  'amos@gmail.com',
            'password' =>  'abcd1234',
            'endereco' =>  'Rua Azul',
            'Date' =>  '1999-08-12',
            'CPF' =>  '999.555.888-78',
            'RG' =>  '99.555.888-78',
            'Fone' =>  '40028922',
            'Genero' =>  'M',
            'created_at' =>  now()
        ] );
    }
}
