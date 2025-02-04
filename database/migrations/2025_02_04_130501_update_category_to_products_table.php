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
        DB::statement("ALTER TABLE `products` CHANGE `category` `category` VARCHAR(9) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'category'");
    }

    /**
     * Revierte las migraciones.
     */
    public function down(): void
    {
        DB::statement("ALTER TABLE `products` CHANGE `category` `category` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'category'");
    }
};
