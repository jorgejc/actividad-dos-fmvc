<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // para enviar de forma masiva desde formularios o referencias
    protected $fillable = [
        "category_name",
        "active"
    ];
}
