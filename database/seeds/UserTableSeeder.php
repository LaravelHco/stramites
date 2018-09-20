<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        Roles: 
            0: Administrador General
            1: Administrador de area
            2: Jefe de Area
            3: Secretaria(o) de Area
        */
         DB::table('users')->insert([
            //entrante
                ['nombres' => 'Admin',
                 'apellido_paterno' => '-',
                 'apellido_materno' => 'General',
                 'f_nac' => '1990-10-10',
                 'email' => 'xxxxxx@xxxx.xxx',
                 'dni' => '00000000',
                 'password' => bcrypt('00000000'),
                 'domicilio' => '',
                 'n_domicilio' => '',
                 'tel' => '',
                 'cel' => '',
                 'rol' => '0',
                ],
                ['nombres' => 'Admin',
                 'apellido_paterno' => 'vv',
                 'apellido_materno' => 'Area',
                 'f_nac' => '1990-10-10',
                 'email' => '00000001@xxxx.xxx',
                 'dni' => '00000001',
                 'password' => bcrypt('00000001'),
                 'domicilio' => '',
                 'n_domicilio' => '',
                 'tel' => '',
                 'cel' => '',
                 'rol' => '1',
                ],
                ['nombres' => 'Pedro',
                 'apellido_paterno' => 'Lopez',
                 'apellido_materno' => 'Cordova',
                 'f_nac' => '1970-10-10',
                 'email' => '0000002@xxxx.xxx',
                 'dni' => '00000002',
                 'password' => bcrypt('00000002'),
                 'domicilio' => '',
                 'n_domicilio' => '',
                 'tel' => '',
                 'cel' => '',
                 'rol' => '2',
                ],
                ['nombres' => 'Sheila',
                 'apellido_paterno' => 'Lopez',
                 'apellido_materno' => 'Cordova',
                 'f_nac' => '1970-10-10',
                 'email' => '0000003@xxxx.xxx',
                 'dni' => '00000003',
                 'password' => bcrypt('00000003'),
                 'domicilio' => '',
                 'n_domicilio' => '',
                 'tel' => '',
                 'cel' => '',
                 'rol' => '3',
                ]
        ]);
    }
}
