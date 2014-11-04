<?php
class QuestionController extends BaseController {
    
    public function index() {
        return View::make('question.index');
    }
}