<?php

use Illuminate\Database\Seeder;

class ClienteprodutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clienteprodutos')->insert([
            'id' => 2,
            'titulo'  =>  'Celular',
            'descricao'  =>  "Importado, android 10, bateria dura até 5 dias....",
            'valor'  =>  1080.50,
            'quantidade'  =>  1,
            'created_at' =>  now()
        ] );
    }
}
