<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $libros = [
            [
                'titulo' => '1Q84',
                'autor' => 'Haruki Murakami',
                'editorial' => 'Tusquets Editores',
                'anio_publicacion' => 2011,
                'isbn' => '978-8483833680',
                'descripcion' => '1Q84 es una novela del escritor japonés Haruki Murakami, publicada en 2009 en Japón y que se convirtió en un éxito de ventas mundial.',
                'imagen' => '1q84-murakami.jpg',
            ],
            [
                'titulo' => 'Alicia en el País de las Maravillas',
                'autor' => 'Lewis Carroll',
                'editorial' => 'Public Domain Books',
                'anio_publicacion' => 1865,
                'isbn' => '9780141192468',
                'descripcion' => 'Alicia en el País de las Maravillas es una obra de literatura escrita por Lewis Carroll.',
                'imagen' => 'alicia-en-el-pais-de-las-maravillas.jpg',
            ],
            [
                'titulo' => 'Animales Fantásticos y Dónde Encontrarlos',
                'autor' => 'J.K. Rowling',
                'editorial' => 'Salamandra',
                'anio_publicacion' => 2001,
                'isbn' => '978-8478884456',
                'descripcion' => 'Libro complementario al universo de Harry Potter, escrito por J.K. Rowling.',
                'imagen' => 'animales-fantasticos-jk-rowling.jpg',
            ],
            [
                'titulo' => 'A Teaspoon of Earth and Sea',
                'autor' => 'Dina Nayeri',
                'editorial' => 'Riverhead Books',
                'anio_publicacion' => 2013,
                'isbn' => '978-1594487093',
                'descripcion' => 'Una novela ambientada en Irán que combina lo real con lo mágico y lo mitológico.',
                'imagen' => 'a-teaspoon-of-earth-sea.jpg',
            ],
            [
                'titulo' => 'Crepúsculo',
                'autor' => 'Stephenie Meyer',
                'editorial' => 'Little, Brown and Company',
                'anio_publicacion' => 2005,
                'isbn' => '978-0316160179',
                'descripcion' => 'Crepúsculo es una novela de fantasía romántica dirigida principalmente a adolescentes, escrita por Stephenie Meyer.',
                'imagen' => 'crepusculo.jpg',
            ],
            [
                'titulo' => 'Los Crímenes de la Calle Morgue',
                'autor' => 'Edgar Allan Poe',
                'editorial' => 'Public Domain Books',
                'anio_publicacion' => 1841,
                'isbn' => '978-8478884684', // Agregar ISBN si es conocido
                'descripcion' => 'Los Crímenes de la Calle Morgue es un cuento de misterio y terror escrito por Edgar Allan Poe.',
                'imagen' => 'crimenes-de-la-calle-morgue-allan-poe.jpg',
            ],
            [
                'titulo' => 'Cuentos Imprescindibles',
                'autor' => 'Edgar Allan Poe',
                'editorial' => 'Public Domain Books',
                'anio_publicacion' => 1845, // Año aproximado
                'isbn' => '978-8478884079', // Agregar ISBN si es conocido
                'descripcion' => 'Colección de cuentos escritos por Edgar Allan Poe, considerados imprescindibles en la literatura de terror.',
                'imagen' => 'cuentos-imprescindibles.jpg',
            ],
            [
                'titulo' => 'Dune',
                'autor' => 'Frank Herbert',
                'editorial' => 'Ace Books',
                'anio_publicacion' => 1965, // Año aproximado
                'isbn' => '978-0441172719',
                'descripcion' => 'Dune es una novela de ciencia ficción escrita por Frank Herbert, considerada una de las mejores de su género.',
                'imagen' => 'dune-frank-herbert.jpg',
            ],
            [
                'titulo' => 'El Bosque Negro',
                'autor' => 'J.R.R. Tolkien',
                'editorial' => 'Public Domain Books',
                'anio_publicacion' => 2023, // Año aproximado
                'isbn' => '978-8478884249', // Agregar ISBN si es conocido
                'descripcion' => 'El Bosque Negro es una obra de fantasía escrita por J.R.R. Tolkien, autor de El Señor de los Anillos.',
                'imagen' => 'el-bosque-negro-tolkien.jpg',
            ],
            [
                'titulo' => 'El Instituto',
                'autor' => 'Stephen King',
                'editorial' => 'Scribner',
                'anio_publicacion' => 2019,
                'isbn' => '978-1982110567',
                'descripcion' => 'El Instituto es una novela de terror y ciencia ficción escrita por Stephen King, ambientada en un misterioso instituto.',
                'imagen' => 'el-instituto-stephen.jpg',
            ],
            [
                'titulo' => 'Hombres sin mujeres',
                'autor' => 'Haruki Murakami',
                'editorial' => 'Tusquets Editores',
                'anio_publicacion' => 2014, // Año aproximado
                'isbn' => '978-6073134313',
                'descripcion' => 'Hombres sin mujeres es una colección de relatos del aclamado escritor japonés Haruki Murakami.',
                'imagen' => 'hombres-sin-mujeres-murakami.jpg',
            ],
            [
                'titulo' => 'HP Lovecraft: Contra el mundo, contra la vida',
                'autor' => 'Michel Houellebecq',
                'editorial' => 'Alianza Editorial',
                'anio_publicacion' => 1991, // Año aproximado
                'isbn' => '978-8420694225',
                'descripcion' => 'Libro biográfico sobre el escritor de terror H.P. Lovecraft, escrito por Michel Houellebecq.',
                'imagen' => 'hp-lovecraft.jpg',
            ],
            [
                'titulo' => 'Juego de Tronos (Canción de Hielo y Fuego, Libro 1)',
                'autor' => 'George R.R. Martin',
                'editorial' => 'Gigamesh',
                'anio_publicacion' => 1996, // Año aproximado
                'isbn' => '978-8496208005',
                'descripcion' => 'Primer libro de la saga "Canción de Hielo y Fuego", que inspiró la serie de televisión "Juego de Tronos".',
                'imagen' => 'juego-de-tronos-hieloyfuego.jpg',
            ],
            [
                'titulo' => 'La Naranja Mecánica',
                'autor' => 'Anthony Burgess',
                'editorial' => 'Penguin Books',
                'anio_publicacion' => 1962, // Año aproximado
                'isbn' => '978-0141182605',
                'descripcion' => 'La Naranja Mecánica es una novela distópica sobre la violencia y el libre albedrío, escrita por Anthony Burgess.',
                'imagen' => 'la-naranja-mecanica.jpg',
            ],
            [
                'titulo' => 'Misery',
                'autor' => 'Stephen King',
                'editorial' => 'Viking Press',
                'anio_publicacion' => 1987,
                'isbn' => '978-0451169525',
                'descripcion' => 'Misery es una novela de terror psicológico escrita por Stephen King, que trata sobre un famoso escritor secuestrado por una fan obsesiva.',
                'imagen' => 'misery-stephen-king.jpg',
            ],
            [
                'titulo' => 'Pomegranate',
                'autor' => 'Helene Blaine',
                'editorial' => 'Zumaya Thresholds',
                'anio_publicacion' => 2010,
                'isbn' => '978-1934841167',
                'descripcion' => 'Pomegranate es una novela de ficción histórica sobre el mito de Perséfone y su relación con los granados, escrita por Helene Blaine.',
                'imagen' => 'pomegranate-helen-blaine-lee.jpg',
            ],
            [
                
                'titulo' => 'The Sisters Brothers',
                'autor' => 'Patrick deWitt',
                'editorial' => 'Ecco Press',
                'anio_publicacion' => 2011,
                'isbn' => '978-0062041265',
                'descripcion' => 'The Sisters Brothers es una novela de ficción ambientada en el Salvaje Oeste, escrita por Patrick deWitt.',
                'imagen' => 'the-sisters-brothers-patrick-de-witt.jpg',
            ],
            [
                'titulo' => 'Crónicas de la Revolución Rusa',
                'autor' => 'John Reed',
                'editorial' => 'Public Domain Books',
                'anio_publicacion' => 1919,
                'isbn' => '978-8478884989', // No disponible
                'descripcion' => 'Crónicas de la Revolución Rusa es un relato histórico escrito por John Reed, periodista estadounidense.',
                'imagen' => 'viktor-shklovski-cronicas-de-la-revolucion-rusa.jpg',
            ],
            [
                'titulo' => 'El Señor de los Anillos: La Comunidad del Anillo',
                'autor' => 'J.R.R. Tolkien',
                'editorial' => 'Minotauro',
                'anio_publicacion' => 1954, // Año aproximado
                'isbn' => '978-8445073768',
                'descripcion' => 'El primer libro de la saga "El Señor de los Anillos", escrito por J.R.R. Tolkien.',
                'imagen' => 'lord-of-the-ring.jpg',
            ],
            [
                'titulo' => 'Harry Potter y el Prisionero de Azkaban',
                'autor' => 'J.K. Rowling',
                'editorial' => 'Salamandra',
                'anio_publicacion' => 1999,
                'isbn' => '978-8478884957',
                'descripcion' => 'Tercer libro de la serie "Harry Potter", escrito por J.K. Rowling.',
                'imagen' => 'harrypotter-azkaban.jpg',
            ],

        ];

         foreach ($libros as $libroData) {
            Libro::create($libroData);
        }

    }
}
