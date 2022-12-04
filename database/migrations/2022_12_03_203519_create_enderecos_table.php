<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments("id");
            $table->string("logradouro", 50);
            $table->string("numero", 4);
            $table->string("cidade", 50);
            $table->string("estado", 2);
            $table->string("cep", 8);
            $table->string("complemento", 50);
            $table->integer("usuario_id")->unsigned();
            $table->timestamps();

            $table->foreign("usuario_id")
                    ->references("id")->on("usuarios")
                    ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
};
