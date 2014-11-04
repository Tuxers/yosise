<?php
class QuestionSeeder extends Seeder {
    public function run() {
        $questions = [
            [
                'id'=>1,
                'title'=>'De que se trata esta carrera ?',
                'description'=>'me gustaria saber de que se trata la carrera',
                'is_promoted'=>false,
                'up_votes'=>0,
                'down_votes'=>0,
                'community_id'=>2,
                'user_id'=>7
            ],
            [
                'id'=>2,
                'title'=>'Necesito saber matemáticas para estudiar esta carrera?',
                'description'=>'En cole soy malo en matematicas, necesito saber todo eso para entra a informatica?, que opinan?',
                'is_promoted'=>false,
                'up_votes'=>0,
                'down_votes'=>0,
                'community_id'=>2,
                'user_id'=>7
            ],
            [
                'id'=>3,
                'title'=>'A qué me voy a dedicar al terminar la carrera?',
                'description'=>'solo me dedique a aprobar examenes, ya estoy por finalizar la carrera y me gustaría saber como es le mercado laboral, que se hace, que solicitan, etc.',
                'is_promoted'=>false,
                'up_votes'=>0,
                'down_votes'=>0,
                'community_id'=>2,
                'user_id'=>5
            ],
            [
                'id'=>4,
                'title'=>'Donde puedo tomar los mejores cursos para capacitarme en aplicaciones móviles?',
                'description'=>'me llamo la anteción el como desarrollar aplicaciones móviles ccon android, me gustaria saber donde puedo capacitarme en este tema',
                'is_promoted'=>false,
                'up_votes'=>0,
                'down_votes'=>0,
                'community_id'=>2,
                'user_id'=>5
            ],
        ];

        DB::table('questions')->insert($questions);
    }
}
