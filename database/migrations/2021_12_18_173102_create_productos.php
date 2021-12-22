<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->integer("cod_producto")->primary();
            $table->string("nom_producto",100);
            $table->unsignedTinyInteger("cod_categoria");
            $table->string("id_empresa",12);
            $table->unsignedInteger("precio");
            $table->unsignedTinyInteger("stock_critico");
            $table->unsignedTinyInteger("stock");
            $table->tinyInteger("estado")->default(1);

            $table->foreign("id_empresa")->references("id_empresa")->on("empresas")->onDelete("cascade");
            $table->foreign("cod_categoria")->references("cod_categoria")->on("categorias")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
