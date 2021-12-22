<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments("num_venta");
            $table->string("id_local",12);
            $table->timestamp("fecha");
            $table->unsignedInteger("sub_afecto")->default(0);
            $table->unsignedInteger("sub_exento")->default(0);
            $table->unsignedInteger("total_iva")->default(0);
            $table->unsignedInteger("total")->default(0);

            $table->foreign("id_local")->references("id_local")->on("locales")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
