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
                'descripcion' => 'Esta obra maestra de Murakami nos sumerge en un Tokio alternativo en 1984, donde dos almas perdidas, Aomame y Tengo, se entrelazan en un tejido de realidades paralelas. A medida que desentrañan los misterios de este universo extraño y perturbador, se ven envueltos en una red de conspiraciones, amor y destino. Con una prosa evocadora y un sentido único de lo surrealista, Murakami teje una historia fascinante que desafía las convenciones de la realidad y la percepción.',
                'imagen' => 'images/libros/1q84-murakami.jpg',
            ],
            [
                'titulo' => 'Alicia en el País de las Maravillas',
                'autor' => 'Lewis Carroll',
                'editorial' => 'Public Domain Books',
                'anio_publicacion' => 1865,
                'isbn' => '9780141192468',
                'descripcion' => 'Este cuento clásico nos transporta a un mundo de absurdo y maravilla a través de los ojos de la curiosa Alicia. Siguiendo a la joven protagonista mientras cae por la madriguera del conejo, nos encontramos con una sucesión de encuentros con personajes excéntricos y situaciones extravagantes. Desde el Sombrerero Loco hasta la Reina de Corazones, cada página rebosa de imaginación y surrealismo, invitándonos a explorar los rincones más profundos de nuestra propia imaginación.

                ',
                'imagen' => 'images/libros/alicia-en-el-pais-de-las-maravillas.jpg',
            ],
            [
                'titulo' => 'Animales Fantásticos y Dónde Encontrarlos',
                'autor' => 'J.K. Rowling',
                'editorial' => 'Salamandra',
                'anio_publicacion' => 2001,
                'isbn' => '978-8478884456',
                'descripcion' => 'Este libro nos introduce al fascinante mundo de las criaturas mágicas a través de los ojos del renombrado magizoólogo Newt Scamander. Desde los adorables Nifflers hasta los majestuosos Hipogrifos, cada página está llena de información detallada sobre estas criaturas fantásticas. Con su estilo característico y su habilidad para crear mundos vibrantes, Rowling nos lleva en un viaje inolvidable a través de un universo lleno de magia y maravilla.',
                'imagen' => 'images/libros/animales-fantasticos-jk-rowling.jpg',
            ],
            [
                'titulo' => 'A Teaspoon of Earth and Sea',
                'autor' => 'Dina Nayeri',
                'editorial' => 'Riverhead Books',
                'anio_publicacion' => 2013,
                'isbn' => '978-1594487093',
                'descripcion' => 'Esta conmovedora novela sigue el viaje épico de una familia iraní que huye de la guerra en busca de seguridad y una vida mejor. A través de los ojos de la valiente Saba, somos testigos de los peligros y desafíos que enfrentan mientras luchan por encontrar un lugar al que llamar hogar. Con una prosa emotiva y evocadora, Nayeri captura la lucha universal por la identidad y la pertenencia en un mundo marcado por la adversidad y la esperanza.',
                'imagen' => 'images/libros/a-teaspoon-of-earth-sea.jpg',
            ],
            [
                'titulo' => 'Crepúsculo',
                'autor' => 'Stephenie Meyer',
                'editorial' => 'Little, Brown and Company',
                'anio_publicacion' => 2005,
                'isbn' => '978-0316160179',
                'descripcion' => 'Esta saga de romance paranormal sigue la historia de Bella Swan, una joven que se enamora de Edward Cullen, un vampiro. Ambientada en la lluviosa Forks, Washington, la historia explora los desafíos de una relación prohibida entre humanos y vampiros, mientras Bella se enfrenta a peligros sobrenaturales y lucha por su propio lugar en el mundo. Con su mezcla de romance, intriga y fantasía, "Crepúsculo" cautiva a los lectores con su emocionante narrativa y personajes inolvidables.',
                'imagen' => 'images/libros/crepusculo.jpg',
            ],
            [
                'titulo' => 'Los Crímenes de la Calle Morgue',
                'autor' => 'Edgar Allan Poe',
                'editorial' => 'Public Domain Books',
                'anio_publicacion' => 1841,
                'isbn' => '978-8478884684', 
                'descripcion' => 'Este relato clásico es considerado uno de los primeros ejemplos del género de detectives. Siguiendo al astuto detective C. Auguste Dupin mientras resuelve un misterioso asesinato en París, la historia está llena de giros inesperados y atmósfera oscura. A través de la brillante deducción de Dupin y su perspicacia psicológica, Poe nos sumerge en un mundo de intriga y suspense, estableciendo un estándar para todas las historias de detectives que le siguieron.',
                'imagen' => 'images/libros/crimenes-de-la-calle-morgue-allan-poe.jpg',
            ],
            [
                'titulo' => 'Cuentos Imprescindibles',
                'autor' => 'Edgar Allan Poe',
                'editorial' => 'Public Domain Books',
                'anio_publicacion' => 1845,
                'isbn' => '978-8478884079',
                'descripcion' => 'Esta colección reúne algunas de las obras más emblemáticas del maestro del horror y la narrativa gótica. Desde el inquietante "El corazón delator" hasta el misterioso "El cuervo", cada cuento transporta al lector a un mundo de oscuridad y suspense. Con su prosa magistral y su exploración de temas como la locura, la muerte y lo sobrenatural, Poe cautiva con su habilidad para tejer historias que siguen resonando a través de los siglos.',
                'imagen' => 'images/libros/cuentos-imprescindibles.jpg',
            ],
            [
                'titulo' => 'Dune',
                'autor' => 'Frank Herbert',
                'editorial' => 'Ace Books',
                'anio_publicacion' => 1965,
                'isbn' => '978-0441172719',
                'descripcion' => 'En este épico de ciencia ficción, nos encontramos en un futuro distante donde las casas nobles luchan por el control del recurso más valioso del universo: la especia melange. La historia sigue a Paul Atreides, quien se convierte en el líder de una tribu desértica mientras lucha contra fuerzas políticas y religiosas en un mundo inhóspito y peligroso. Con su intrincada política, complejos personajes y vastos paisajes, "Dune" es una obra maestra del género.',
                'imagen' => 'images/libros/dune-frank-herbert.jpg',
            ],
            [
                'titulo' => 'El Bosque Negro',
                'autor' => 'J.R.R. Tolkien',
                'editorial' => 'Public Domain Books',
                'anio_publicacion' => 2023,
                'isbn' => '978-8478884249',
                'descripcion' => 'Esta novela nos sumerge en un mundo de misterio y aventura ambientado en la España de la posguerra civil. Cuando un grupo de jóvenes se adentra en un bosque aparentemente encantado en busca de un tesoro perdido, se ven envueltos en una trama de secretos oscuros y criaturas misteriosas. Con su atmósfera evocadora y sus personajes entrañables, Mallorquí teje una historia emocionante que cautiva desde la primera página.',
                'imagen' => 'images/libros/el-bosque-negro-tolkien.jpg',
            ],
            [
                'titulo' => 'El Instituto',
                'autor' => 'Stephen King',
                'editorial' => 'Scribner',
                'anio_publicacion' => 2019,
                'isbn' => '978-1982110567',
                'descripcion' => ' En esta novela, King nos lleva a un lugar misterioso donde niños con habilidades especiales son reclutados por una organización secreta para llevar a cabo experimentos siniestros. Cuando un nuevo grupo de niños llega al Instituto, se unen para luchar contra sus captores y descubrir la verdad detrás de sus poderes. Con su mezcla de suspense, horror y emoción, King crea una historia inolvidable que te mantiene en vilo hasta la última página.',
                'imagen' => 'images/libros/el-instituto-stephen.jpg',
            ],
            [
                'titulo' => 'Hombres sin mujeres',
                'autor' => 'Haruki Murakami',
                'editorial' => 'Tusquets Editores',
                'anio_publicacion' => 2014,
                'isbn' => '978-6073134313',
                'descripcion' => 'Esta colección de relatos explora las complejidades del amor, la soledad y la conexión humana a través de una serie de personajes inolvidables. Desde un hombre que se enamora de una mujer con un pasado oscuro hasta otro que se enfrenta a la pérdida de su esposa, cada historia ofrece una visión única de la condición humana. Con su prosa poética y su profunda introspección, Murakami nos invita a reflexionar sobre lo que significa realmente estar vivo.',
                'imagen' => 'images/libros/hombres-sin-mujeres-murakami.jpg',
            ],
            [
                'titulo' => 'HP Lovecraft: Contra el mundo, contra la vida',
                'autor' => 'Michel Houellebecq',
                'editorial' => 'Alianza Editorial',
                'anio_publicacion' => 1991,
                'isbn' => '978-8420694225',
                'descripcion' => '"Los mitos de Cthulhu" de H.P. Lovecraft: Esta colección reúne algunas de las historias más icónicas del maestro del horror cósmico. Desde la monstruosa entidad de Cthulhu hasta los antiguos y olvidados dioses que acechan en las sombras, cada cuento nos sumerge en un mundo de pesadillas y locura. Con su prosa evocadora y su exploración de lo desconocido, Lovecraft ha dejado una marca indeleble en el género del horror que sigue resonando en la cultura popular.',
                'imagen' => 'images/libros/hp-lovecraft.jpg',
            ],
            [
                'titulo' => 'Juego de Tronos (Canción de Hielo y Fuego, Libro 1)',
                'autor' => 'George R.R. Martin',
                'editorial' => 'Gigamesh',
                'anio_publicacion' => 1996,
                'isbn' => '978-8496208005',
                'descripcion' => 'Juego de tronos (Canción de hielo y fuego, Libro 1)" de George R.R. Martin: En este primer libro de la saga épica, Martin nos transporta a un mundo de intrigas políticas, traiciones y batallas épicas. Con personajes complejos como los Stark, Lannister y Targaryen, la historia se desarrolla en el continente de Poniente, donde las casas nobles luchan por el Trono de Hierro. Con su narrativa absorbente y su capacidad para subvertir las expectativas del lector, Martin crea un mundo vibrante y emocionante que ha cautivado a millones de lectores en todo el mundo.',
                'imagen' => 'images/libros/juego-de-tronos-hieloyfuego.jpg',
            ],
            [
                'titulo' => 'La Naranja Mecánica',
                'autor' => 'Anthony Burgess',
                'editorial' => 'Penguin Books',
                'anio_publicacion' => 1962,
                'isbn' => '978-0141182605',
                'descripcion' => 'Esta novela distópica nos lleva a un futuro sombrío donde la violencia y el control social dominan la sociedad. Alex, un joven delincuente, lidera una pandilla que se dedica a cometer actos de ultraje y brutalidad. Sin embargo, cuando es capturado por las autoridades, se convierte en sujeto de un experimento de reacondicionamiento conductual que lo lleva por un viaje de redención y autodescubrimiento. A través de su lenguaje inventivo y su exploración de temas como la libre voluntad y la moralidad, Burgess crea una obra maestra provocativa que desafía las convenciones de la narrativa tradicional.',
                'imagen' => 'images/libros/la-naranja-mecanica.jpg',
            ],
            [
                'titulo' => 'Misery',
                'autor' => 'Stephen King',
                'editorial' => 'Viking Press',
                'anio_publicacion' => 1987,
                'isbn' => '978-0451169525',
                'descripcion' => 'En esta novela de terror psicológico, King nos presenta a Paul Sheldon, un famoso autor que sufre un accidente automovilístico y es rescatado por una fan obsesionada llamada Annie Wilkes. A medida que Paul se recupera de sus heridas, descubre que Annie tiene planes retorcidos para él y se ve atrapado en una pesadilla de la que parece no haber escape. Con su exploración de temas como la obsesión y la locura, King crea una historia aterradora que te mantiene en vilo hasta la última página.',
                'imagen' => 'images/libros/misery-stephen-king.jpg',
            ],
            [
                'titulo' => 'Pomegranate',
                'autor' => 'Helene Blaine',
                'editorial' => 'Zumaya Thresholds',
                'anio_publicacion' => 2010,
                'isbn' => '978-1934841167',
                'descripcion' => 'Pomegranate o Granada de Helene Blaine, nos lleva a la corte de la última sultana de Granada, donde los secretos y las traiciones acechan en cada esquina. A través de los ojos de la princesa Amani, somos testigos de los eventos que llevan al colapso del reino y la caída de la dinastía nazarí. Con su prosa lírica y su rica ambientación histórica, White nos sumerge en un mundo de intriga y romance que captura la belleza y la tragedia de la historia.',
                'imagen' => 'images/libros/pomegranate-helen-blaine-lee.jpg',
            ],
            [
                
                'titulo' => 'The Sisters Brothers',
                'autor' => 'Patrick deWitt',
                'editorial' => 'Ecco Press',
                'anio_publicacion' => 2011,
                'isbn' => '978-0062041265',
                'descripcion' => 'Esta novela nos presenta a los hermanos Charlie y Eli Sisters, dos pistoleros contratados para asesinar a un hombre en el viejo oeste americano. A medida que viajan por el país en busca de su objetivo, se enfrentan a una serie de encuentros extraños y peligrosos que ponen a prueba su lealtad y su humanidad. Con su prosa evocadora y su exploración de temas como la violencia y la redención, deWitt crea una historia memorable que combina el humor negro con la tragedia.',
                'imagen' => 'images/libros/the-sisters-brothers-patrick-de-witt.jpg',
            ],
            [
                'titulo' => 'Crónicas de la Revolución Rusa',
                'autor' => 'John Reed',
                'editorial' => 'Public Domain Books',
                'anio_publicacion' => 1919,
                'isbn' => '978-8478884989',
                'descripcion' => 'Este libro nos lleva al corazón de la Revolución Rusa de 1917, ofreciendo una crónica detallada de los eventos que llevaron al derrocamiento del régimen zarista y el ascenso del comunismo. A través de los ojos del periodista John Reed, somos testigos de la agitación social y política que sacudió a Rusia en ese momento crucial de su historia. Con su narrativa vívida y su análisis perspicaz, Reed nos ofrece una visión única de uno de los momentos más importantes del siglo XX.',
                'imagen' => 'images/libros/viktor-shklovski-cronicas-de-la-revolucion-rusa.jpg',
            ],
            [
                'titulo' => 'El Señor de los Anillos: La Comunidad del Anillo',
                'autor' => 'J.R.R. Tolkien',
                'editorial' => 'Minotauro',
                'anio_publicacion' => 1954,
                'isbn' => '978-8445073768',
                'descripcion' => 'El primer libro de la saga "El Señor de los Anillos", escrito por J.R.R. Tolkien.',
                'imagen' => 'images/libros/lord-of-the-ring.jpg',
            ],
            [
                'titulo' => 'Harry Potter y el Prisionero de Azkaban',
                'autor' => 'J.K. Rowling',
                'editorial' => 'Salamandra',
                'anio_publicacion' => 1999,
                'isbn' => '978-8478884957',
                'descripcion' => 'En el tercer libro de la saga de Harry Potter, el joven mago regresa a Hogwarts para su tercer año escolar, enfrentándose a nuevos desafíos y misterios. Cuando el peligroso criminal Sirius Black escapa de la prisión de Azkaban, Harry se ve envuelto en una intriga que lo lleva a descubrir la verdad sobre su pasado. Con su magia cautivadora y su exploración de temas como la amistad y el coraje, Rowling continúa encantando a lectores de todas las edades.',
                'imagen' => 'images/libros/harrypotter-azkaban.jpg',
            ],

        ];

         foreach ($libros as $libroData) {
            Libro::create($libroData);
        }

    }
}
