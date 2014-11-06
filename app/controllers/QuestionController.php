<?php
class QuestionController extends BaseController {

    public function index($id=null) {
    	if ($id) {
    		$question = Question::findOrFail($id);
    	} else {
    		// Retrieve the first question
    		$question = Question::findOrFail(1);
    	}
    	$user = $question->user;
    	$answers = $question->answers;
        return View::make('question.index')
        	->with('question', $question)
        	->with('user', $user)
        	->with('answers', $answers);
    }

    public function create() {
        $rules = [
            'title'=>'required',
            'description'=>'required'
        ];
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('/community/' . Input::get('communityId'))
                ->with('error', 'Algunos datos son incorrectos');
        }
        $question = new Question();
        $question->title = Input::get('title');
        $question->description = Input::get('description');
        $question->community_id = Input::get('communityId');
        $question->user_id = Auth::user()->id;
        $question->save();

        return Redirect::to('/community/' . Input::get('communityId'));
    }

    public function doAnswer($id) {
        $answer = new Answer();
        $answer->content = Input::get('content');
        $answer->user_id = Auth::id();
        $answer->up_votes = 0;
        $answer->down_votes = 0;
        $answer->is_best = false;
        $answer->question_id = $id;
        $answer->save();

        $answer = Answer::where('id', '=', $answer->id)->with('user')->first();

        return Response::json($answer, 200);
    }
}
