<?php
class UserController extends BaseController {
    public function register() {
        if (Auth::check()){
            return Redirect::to('/');
        }

        $colleges = College::all();
        $areas = Area::all();

        return View::make('user.register')
            ->with('colleges', $colleges)
            ->with('areas', $areas);
    }

    public function doRegister() {
        if (Auth::check()){
            return Redirect::to('/');
        }

        $rules = [
            'name'=>'required|min:3',
            'username'=>'required|unique:users',
            'password'=>'required|min:4',
            'email'=>'required|email|unique:users',
            'bio'=>'required|min:10',
            'ocupation'=>'required|in:stu,uni,pro'
        ];
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('register')
                ->withErrors($validator);
        }

        $user = new User(Input::all());
        $user->password = Hash::make(Input::get('password'));
        $user->picture_url = "default.png";

        if($user->ocupation === 'uni' || $user->ocupation === 'pro') {
            $user->college = College::find(Input::get('college'))->name;
            $user->career = Area::find(Input::get('career'))->name;
        }
        $user->save();
        $user->communities()->sync([2], false); // associate directly to UMSA INFO

        $community = Community::find(2);
        $community->members = $community->members + 1;
        $community->save();

        return Redirect::to('login');
    }

    public function profile($id=null) {
        if ($id) {
            $user = User::findOrFail($id);
        } else {
            $user = Auth::user();
        }
        $questions = $user->questions()->get();
        $answers = $user->answers()->with('question')->get();

        return View::make('user.profile')
            ->with('model', $user)
            ->with('questions', $questions)
            ->with('answers', $answers);
    }
}
