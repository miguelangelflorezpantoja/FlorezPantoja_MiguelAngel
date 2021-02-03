<?php

use Illuminate\Database\Seeder;

class EditorialesSedeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datos = [//array de datos
            ['nombre' => 'Norma',
            'direccion' => 'Av. el dorado 90-10',
            'ciudad' => 'Bogota',
            'telefono' => '426652',
            ],
            ['nombre' => 'MC Graw Hill',
            'direccion' => 'cra 85A No 46A-66',
            'ciudad' => 'Popayan',
            'telefono' => '3102266',
            ],
            ['nombre' => 'AlfaOmega Colombiano',
            'direccion' => 'calle 62 No 20-46',
            'ciudad' => 'Ipiales',
            'telefono' => '125520',
            ],
            ['nombre' => 'La Santillana',
            'direccion' => 'calle 32 No 8A-95',
            'ciudad' => 'Pasto',
            'telefono' => '125520',
            ],
            ['nombre' => 'Los tres editores sas',
            'direccion' => 'cra 82 No 11241N-33A',
            'ciudad' => 'funes',
            'telefono' => '700022',
            ]
        ];
        DB::table('editorial')->insert($datos);//inserta los datos a la tabla
    }
}
