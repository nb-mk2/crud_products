<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecuta las migraciones.
     */
    public function up(): void
    {
        DB::statement("ALTER TABLE `products` CHANGE `category` `categoria` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'categoria'");
    }

    /**
     * Revierte las migraciones.
     */
    public function down(): void
    {
        DB::statement("ALTER TABLE `products` CHANGE `categoria` `category` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'categoria'");
    }
};
