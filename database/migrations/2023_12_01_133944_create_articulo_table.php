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
        Schema::create('Articulo', function (Blueprint $table) {
            $table->string('referencia',5);
            $table->string('nombre',100);
            $table->text('descripcion');
            $table->string('color',100);
            $table->float('precioUnitario',8,2);
            $table->text('observacion');
            $table->string('foto',255);
            $table->string('marca',2);//llave foranea
            $table->primary('referencia');
            $table->foreign('Marca')->references('idMarca')->on('Marca');//creacion llave foranea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Articulo');
    }
};
