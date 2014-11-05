<?php
class QuestionController extends BaseController {
    
    public function index($id=null) {
    	if ($id) {
    		$question = Question::findOrFail($id);
    	}
    	$user = $question->user;
    	$answers = $question->answers;
        return View::make('question.index')
        	->with('question', $question)
        	->with('user', $user)
        	->with('answers', $answers);
    }
}