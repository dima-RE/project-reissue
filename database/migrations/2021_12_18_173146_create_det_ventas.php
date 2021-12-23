<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_ventas', function (Blueprint $table) {
            $table->unsignedInteger("num_venta");
            $table->integer("cod_producto");
            $table->unsignedTinyInteger("cantidad");
            $table->unsignedInteger("precio_venta");
            $table->tinyInteger("estado")->default(1);
            $table->softDeletes();

            $table->foreign("num_venta")->references("num_venta")->on("ventas")->onDelete("cascade");
            $table->foreign("cod_producto")->references("cod_producto")->on("productos")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('det_ventas');
    }
}
