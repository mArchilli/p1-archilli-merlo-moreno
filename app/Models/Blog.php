<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'subtitulo',
        'categoria',
        'autor',
        'texto',
        'imagen',
    ];
}
