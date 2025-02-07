<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('objetos', function (Blueprint $table) {
            $table->engine = "InnoDb";
            $table->id();
            $table->string("nombre");
            $table->bigInteger("entorno_id")->unsigned();
            $table->float("dimensiones");
            $table->float("posicion");
            $table->string("color");
            $table->timestamps();
            $table->foreign("entorno_id")->references("id")->on("entornos");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objetos');
    }
};
