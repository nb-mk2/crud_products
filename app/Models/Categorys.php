<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    use HasFactory;

    // Campos permitidos para la asignación masiva
    protected $fillable = ['id', 'description'];
}
