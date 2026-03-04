<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'titulo' => 'Explorando el Mundo Mágico: Nueva Serie de HBO sobre Harry Potter',
                'subtitulo' => 'Un vistazo exclusivo a la nueva adaptación',
                'categoria' => 'Entretenimiento',
                'autor' => 'John Doe',
                'texto' => 'HBO ha anunciado una nueva serie que promete explorar las profundidades del universo de Harry Potter. Con expectativas altas, esta serie explorará historias nunca antes contadas. Según los productores, la serie se centrará en personajes secundarios del mundo de Harry Potter, dándoles una nueva vida y explorando sus historias en un contexto más amplio. Fans de todo el mundo ya están anticipando cómo se expandirá el canon y qué nuevos hechizos, criaturas y aventuras serán revelados.',
                'imagen' => 'images/blog/card-potter.jpg',
            ],
            [
                'titulo' => 'Dune Parte 2: Lo que sabemos hasta ahora',
                'subtitulo' => 'Continuando la saga épica',
                'categoria' => 'Cine',
                'autor' => 'Jane Smith',
                'texto' => 'La segunda película de Dune, dirigida por Denis Villeneuve, promete ser tan impresionante como la primera. Con más drama, política y arenas desérticas, los fans están expectantes. Esta nueva entrega profundizará en la complejidad del universo Dune, explorando más sobre la resistencia de los Fremen y la lucha por el control de la especia. Las expectativas son altas y el reparto, incluyendo a Timothée Chalamet y Zendaya, ha prometido actuaciones que son fieles al espíritu del libro original de Frank Herbert.',
                'imagen' => 'images/blog/card-dune.jpg',
            ],
            [
                'titulo' => 'La importancia de la buena escritura en la era digital',
                'subtitulo' => 'Más que palabras en una pantalla',
                'categoria' => 'Educación',
                'autor' => 'Alice Johnson',
                'texto' => 'En un mundo inundado de información digital, la capacidad de comunicar ideas clara y efectivamente a través de la escritura es más crucial que nunca. Este artículo explora cómo una buena escritura puede impactar de manera significativa en nuestra comunicación diaria, aumentar la efectividad profesional y personal, y cómo los individuos pueden mejorar sus habilidades escritas. Abarcaremos técnicas, herramientas y consejos para escritores en todos los niveles, destacando la importancia de mantener un alto estándar en cada tweet, email y post en redes sociales.',
                'imagen' => 'images/blog/card-escritura.jpg',
            ],
            [
                'titulo' => 'Vientos de Invierno: ¿Qué podemos esperar de la próxima entrega de Game of Thrones?',
                'subtitulo' => 'Anticipando el próximo capítulo',
                'categoria' => 'Literatura',
                'autor' => 'Robert Brown',
                'texto' => 'Los fans de Game of Thrones están esperando ansiosamente la próxima entrega de la serie de libros, "Vientos de Invierno". George R.R. Martin ha prometido que esta entrega traerá muchos giros y revelaciones sorprendentes, con más profundidad en los personajes y complejidades en la trama que antes. Este post analiza lo que sabemos hasta ahora, las teorías de los fans y las expectativas sobre cómo se resolverán las historias pendientes de nuestros personajes favoritos en Westeros.',
                'imagen' => 'images/blog/card-got.jpg',
            ],
        ];

        foreach ($posts as $blogData) {
            Blog::create($blogData);
        }
    }
}
