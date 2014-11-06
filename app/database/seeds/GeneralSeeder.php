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
                'id'=>1,
                'username'=>'jhtan',
                'name'=>'Jhonatan Castro',
                'email'=>'jhtan@gmail.com',
                'password'=>Hash::make('none'),
                'bio'=>'Programacion Competitiva',
                'ocupation'=>'pro',
                'school'=>null,
                'college'=>'UMSA',
                'career'=>'Informatica y Sistemas',
                'organization'=>'USA FFAA',
                'picture_url' => 'jhtan.png'
            ],
            [
                'id'=>2,
                'username'=>'veroka',
                'name'=>'Veronica Arquipa',
                'email'=>'veroka@gmail.com',
                'password'=>Hash::make('none'),
                'bio'=>'Algoritmos, matematicas',
                'ocupation'=>'pro',
                'school'=>null,
                'college'=>'UMSA',
                'career'=>'Informatica y Sistemas',
                'organization'=>'UMSA',
                'picture_url' => 'verok.png'
            ],
            [
                'id'=>3,
                'username'=>'arnold',
                'name'=>'Arnold Paye',
                'email'=>'arnoldpaye@gmail.com',
                'password'=>Hash::make('none'),
                'bio'=>'Algoritmos, matematicas, Latex',
                'ocupation'=>'pro',
                'school'=>null,
                'college'=>'Universidad de Stanford',
                'career'=>'Informatica y Sistemas',
                'organization'=>'Universidad de Stanford',
                'picture_url' => 'arnex.png'
            ],
            [
                'id'=>4,
                'username'=>'neoncyber',
                'name'=>'Sergio Guillen',
                'email'=>'neoncyber@gmail.com',
                'password'=>Hash::make('none'),
                'bio'=>'Desarrollo de software',
                'ocupation'=>'uni',
                'school'=>null,
                'college'=>'MIT',
                'career'=>'Informatica',
                'organization'=>null,
                'picture_url' => 'sergey.png'
            ],
            [
                'id'=>5,
                'username'=>'mariobros',
                'name'=>'Mario Mario',
                'email'=>'mbros@gmail.com',
                'password'=>Hash::make('none'),
                'bio'=>'Rescato princesas de dinosaurios dementes',
                'ocupation'=>'uni',
                'school'=>null,
                'college'=>'UMSA',
                'career'=>'Informatica',
                'organization'=>null,
                'picture_url' => 'mario.png'
            ],
            [
                'id'=>6,
                'username'=>'luigi',
                'name'=>'Luigi Mario',
                'email'=>'lmario@gmail.com',
                'password'=>Hash::make('none'),
                'bio'=>'Rescato princesas de dinosaurios dementes si mi hermano muere',
                'ocupation'=>'uni',
                'school'=>null,
                'college'=>'UMSA',
                'career'=>'Informatica',
                'organization'=>null,
                'picture_url' => 'luigi.png'
            ],
            [
                'id'=>7,
                'username'=>'jperez',
                'name'=>'Juan Perez',
                'email'=>'jperez@gmail.com',
                'password'=>Hash::make('none'),
                'bio'=>'Estudiante de colegio',
                'ocupation'=>'stu',
                'school'=>'Simon Bolivar',
                'college'=>null,
                'career'=>null,
                'organization'=>null,
                'picture_url' => 'juan.png'
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
                'members'=>3,
                'college_id'=>1,
                'area_id'=>1,
                'father_id'=>1,
            ],
        ];
        DB::table('communities')->insert($communities);

        $follows = [
            ['user_id'=>1, 'community_id'=>2],
            ['user_id'=>3, 'community_id'=>2],
            ['user_id'=>4, 'community_id'=>2],
            ['user_id'=>5, 'community_id'=>2],
        ];
        DB::table('follows')->insert($follows);
    }
}
