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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreProyecto', 120);
            $table->string('FuenteFondos', 100);
            $table->double('MontoPlanificado', 50);
            $table->double('MontoPatrocinado', 50);
            $table->double('MontoFondosPropios', 50);
            $table->unsignedBigInteger('nivel_id');
            $table->timestamps();

            $table->foreign('nivel_id')->references('id')->on('niveles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
