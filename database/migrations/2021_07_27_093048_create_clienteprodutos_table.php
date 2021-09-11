<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteprodutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('clienteprodutos', function (Blueprint $table) {
                $table->id();
                $table->string('titulo');
                $table->longText('descricao');
                $table->double('valor', 8, 2);
                $table->integer('quantidade');

                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clienteprodutos');
    }
}
