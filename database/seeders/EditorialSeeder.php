<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Editorial;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Editorial::create([
            'Nombre' => 'Tusquets Editores',
        ]);

        Editorial::create([
            'Nombre' => 'Public Domain Books',
        ]);

        Editorial::create([
            'Nombre' => 'Salamandra',
        ]);

        Editorial::create([
            'Nombre' => 'Riverhead Books',
        ]);

        Editorial::create([
            'Nombre' => 'Little, Brown and Company',
        ]);

        Editorial::create([
            'Nombre' => 'Ace Books',
        ]);

        Editorial::create([
            'Nombre' => 'Scribner',
        ]);

        Editorial::create([
            'Nombre' => 'Alianza Editorial',
        ]);

        Editorial::create([
            'Nombre' => 'Gigamesh',
        ]);

        Editorial::create([
            'Nombre' => 'Penguin Books',
        ]);

        Editorial::create([
            'Nombre' => 'Viking Press',
        ]);

        Editorial::create([
            'Nombre' => 'Zumaya Thresholds',
        ]);

        Editorial::create([
            'Nombre' => 'Ecco Press',
        ]);

        Editorial::create([
            'Nombre' => 'Minotauro',
        ]);
    }
}
