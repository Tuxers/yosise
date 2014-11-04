<?php
class GeneralSeeder extends Seeder {
    public function run() {
        DB::table('colleges')->delete();
        DB::table('areas')->delete();
        DB::table('users')->delete();
        DB::table('communities')->delete();

        $colleges = [
            ['name'=>'UMSA'],
            ['name'=>'UMSS'],
            ['name'=>'Universidad de Manchester'],
            ['name'=>'Universidad de Stanford'],
            ['name'=>'MIT']
        ];
        DB::table('colleges')->insert($colleges);

        $areas = [
            ['name'=>'Informatica y Sistemas'],
            ['name'=>'Matematicas'],
            ['name'=>'Ingenieria Civil'],
        ];
        DB::table('areas')->insert($areas);

        $users = [
            [
                'username'=>'aturing',
                'name'=>'Alan Turing',
                'email'=>'aturing@gmail.com',
                'password'=>Hash::make('none'),
                'bio'=>'Descifre maquina Enigma, Ejercito de USA',
                'ocupation'=>'pro',
                'school'=>null,
                'college'=>'Universidad de Cambridge',
                'career'=>'Informatica y Sistemas',
                'organization'=>'USA FFAA'
            ],
            [
                'username'=>'ltorrico',
                'name'=>'Lucio Torrico',
                'email'=>'ltorrico@gmail.com',
                'password'=>Hash::make('none'),
                'bio'=>'Algoritmos, matematicas',
                'ocupation'=>'pro',
                'school'=>null,
                'college'=>'UMSA',
                'career'=>'Informatica y Sistemas',
                'organization'=>'UMSA'
            ],
            [
                'username'=>'dknuth',
                'name'=>'Donald Knuth',
                'email'=>'dknuth@gmail.com',
                'password'=>Hash::make('none'),
                'bio'=>'Algoritmos, matematicas, Latex',
                'ocupation'=>'pro',
                'school'=>null,
                'college'=>'Universidad de Stanford',
                'career'=>'Informatica y Sistemas',
                'organization'=>'Universidad de Stanford'
            ],
            [
                'username'=>'aswartz',
                'name'=>'Aron Swartz',
                'email'=>'aswartz@gmail.com',
                'password'=>Hash::make('none'),
                'bio'=>'Co-fundador Reddit',
                'ocupation'=>'uni',
                'school'=>null,
                'college'=>'MIT',
                'career'=>'Informatica',
                'organization'=>null
            ],
            [
                'username'=>'mariobros',
                'name'=>'Mario Mario',
                'email'=>'mbros@gmail.com',
                'password'=>Hash::make('none'),
                'bio'=>'Rescato princesas de dinosaurios dementes',
                'ocupation'=>'uni',
                'school'=>null,
                'college'=>'UMSA',
                'career'=>'Informatica',
                'organization'=>null
            ],
            [
                'username'=>'luigi',
                'name'=>'Luigi Mario',
                'email'=>'lmario@gmail.com',
                'password'=>Hash::make('none'),
                'bio'=>'Rescato princesas de dinosaurios dementes si mi hermano muere',
                'ocupation'=>'uni',
                'school'=>null,
                'college'=>'UMSA',
                'career'=>'Informatica',
                'organization'=>null
            ],
            [
                'username'=>'jperez',
                'name'=>'Juan Perez',
                'email'=>'jperez@gmail.com',
                'password'=>Hash::make('none'),
                'bio'=>'Estudiante de colegio',
                'ocupation'=>'stu',
                'school'=>'Simon Bolivar',
                'college'=>null,
                'career'=>null,
                'organization'=>null
            ],
        ];
        DB::table('users')->insert($users);

        $communities = [
            [
                'id'=>1,
                'name'=>'Informatica y Sistemas',
                'description'=>'Comunidad GEneral Informatica y Sistemas',
                'members'=>0,
                'college_id'=>1,
                'area_id'=>1,
                'father_id'=>1,
            ],
            [
                'id'=>2,
                'name'=>'Informatica - UMSA',
                'description'=>'Informatica - UMSA',
                'members'=>0,
                'college_id'=>1,
                'area_id'=>1,
                'father_id'=>1,
            ],
        ];
        DB::table('communities')->insert($communities);
    }
}
