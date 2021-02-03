<?php

use Illuminate\Database\Seeder;

class LibrosSedeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datos = [
            ['isbn' => '9777-987',
            'titulo' => 'Nariño',
            'precio' => 34000,
            'stock' => 10,
            'editorial' => '1',
            ],
            ['isbn' => '70000-900',
            'titulo' => 'cien años de soledad',
            'precio' => 67777777,
            'stock' => 3,
            'editorial' => '2',
            ],
            ['isbn' => '90-000',
            'titulo' => 'La vida',
            'precio' => 100000,
            'stock' => 25,
            'editorial' => '3',
            ],
            ['isbn' => '87-59767',
            'titulo' => 'Antes de ti',
            'precio' => 60000,
            'stock' => 0,
            'editorial' => '4',
            ],
            ['isbn' => '905555',
            'titulo' => 'solo un dia',
            'precio' => 100000,
            'stock' => 45,
            'editorial' => '2',
            ]
        ];
        DB::table('libro')->insert($datos);
    }
}
