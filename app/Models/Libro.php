<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Libro extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'autor',
        'anio_publicacion',
        'isbn',
        'descripcion',
        'imagen',
        'editorial_fk'
    ];

    public function editorial():BelongsTo {
        //Definimos la relacion 1 a N desde la tabla referencial, siendo Libro la N.
        return $this->belongsTo(Editorial::class, "editorial_fk", "editorial_id");
    }
}
