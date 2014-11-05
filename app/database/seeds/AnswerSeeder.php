<?php
class AnswerSeeder extends Seeder {
    public function run() {
        $answers = [
            [
                'id'=>1,
                'content'=>'depende desde que punto lo veas, algunos piensan que la carrera solo se trata de programar, otros de hacer ciencia e investigacion, hoy en dia el mercado requiere mas habilidades teccnicas pero mucho depende de la empresa en la que desees trabajar',
                'is_best'=>false,
                'up_votes'=>0,
                'down_votes'=>0,
                'question_id'=>1,
                'user_id'=>5
            ],
            [
                'id'=>2,
                'content'=>'existe mucha gente que logra muchas cosas tecnicas sin la necesidad de dominar matematicas, por otro lado, si quieres hacer cosas realmente interesantes y que valgan la pena, debes estar interesado en las matematicas',
                'is_best'=>false,
                'up_votes'=>0,
                'down_votes'=>0,
                'question_id'=>2,
                'user_id'=>5
            ],
            [
                'id'=>3,
                'content'=>'Por lo general la mayoria se dedica a desarrollar, administrar servidores pero pocos a la investigacion cientifica',
                'is_best'=>false,
                'up_votes'=>0,
                'down_votes'=>0,
                'question_id'=>3,
                'user_id'=>1
            ],
            [
                'id'=>4,
                'content'=>'Si eres autodidacta y sabes hablar/leer ingles con la documentacion oficial de android es suficiente',
                'is_best'=>false,
                'up_votes'=>0,
                'down_votes'=>0,
                'question_id'=>4,
                'user_id'=>1
            ],
            [
                'id'=>5,
                'content'=>'Se trata de computadoras.',
                'is_best'=>false,
                'up_votes'=>0,
                'down_votes'=>0,
                'question_id'=>1,
                'user_id'=>3
            ],
        ];
        DB::table('answers')->insert($answers);
    }
}
