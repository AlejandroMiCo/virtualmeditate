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
        Schema::create('entornos', function (Blueprint $table) {
            $table->engine="InnoDb";
            $table->id();
            $table->bigInteger("categoria_id")->unsigned();
            $table->string("nombre");
            $table->string("musica");
            $table->timestamps();
            $table->foreign("categoria_id")->references("id")->on("categorias");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entornos');
    }
};
