<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function obtenerFechaFormateada()
    {
        return Carbon::parse($this->created_at)->format('d/m/Y H:i');
    }
}
