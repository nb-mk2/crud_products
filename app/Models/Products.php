<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    // Campos permitidos para la asignación masiva
    protected $fillable = ['name', 'description', 'category', 'price'];
}
