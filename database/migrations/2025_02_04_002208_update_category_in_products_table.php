<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecuta las migraciones.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Para modificar una columna existente es necesario tener instalado el paquete doctrine/dbal.
            // Ejecuta: composer require doctrine/dbal
            $table->string('category', 100)->default('categoria')->change();
        });
    }

    /**
     * Revierte las migraciones.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Revertir el cambio. Ajusta la definición según la versión original.
            $table->string('categoria')->change();
        });
    }
};
