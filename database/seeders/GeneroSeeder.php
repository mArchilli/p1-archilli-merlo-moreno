<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genero::create([
            'Nombre' => 'Ficción contemporánea',
        ]);
        
        Genero::create([
            'Nombre' => 'Fantasía',
        ]);
        
        Genero::create([
            'Nombre' => 'Realismo mágico',
        ]);
        
        Genero::create([
            'Nombre' => 'Literatura infantil',
        ]);
        
        Genero::create([
            'Nombre' => 'Aventura',
        ]);
        
        Genero::create([
            'Nombre' => 'Literatura de inmigración',
        ]);
        
        Genero::create([
            'Nombre' => 'Romance paranormal',
        ]);
        
        Genero::create([
            'Nombre' => 'Fantasía juvenil',
        ]);
        
        Genero::create([
            'Nombre' => 'Misterio',
        ]);
        
        Genero::create([
            'Nombre' => 'Detectivesco',
        ]);
        
        Genero::create([
            'Nombre' => 'Terror',
        ]);
        
        Genero::create([
            'Nombre' => 'Gótico',
        ]);
        
        Genero::create([
            'Nombre' => 'Ciencia ficción',
        ]);
        
        Genero::create([
            'Nombre' => 'Épico',
        ]);
        
        Genero::create([
            'Nombre' => 'Suspense',
        ]);
        
        Genero::create([
            'Nombre' => 'Thriller',
        ]);
        
        Genero::create([
            'Nombre' => 'Relatos cortos',
        ]);
        
        Genero::create([
            'Nombre' => 'Drama',
        ]);
        
        Genero::create([
            'Nombre' => 'Ensayo',
        ]);
        
        Genero::create([
            'Nombre' => 'Biografía',
        ]);
        
        Genero::create([
            'Nombre' => 'Ficción especulativa',
        ]);
        
        Genero::create([
            'Nombre' => 'Suspense psicológico',
        ]);
        
        Genero::create([
            'Nombre' => 'Ficción histórica',
        ]);
        
        Genero::create([
            'Nombre' => 'Western',
        ]);
        
        Genero::create([
            'Nombre' => 'Humor negro',
        ]);
        
        Genero::create([
            'Nombre' => 'No ficción',
        ]);
        
        Genero::create([
            'Nombre' => 'Historia',
        ]);
        
        Genero::create([
            'Nombre' => 'Literatura juvenil',
        ]);
    }
}
