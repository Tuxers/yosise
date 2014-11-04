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
                ->with('error', 'Algunos datos son incorrectos');
        }

        $user = new User(Input::all());
        $user->password = Hash::make(Input::get('password'));

        if($user->ocupation === 'uni' || $user->ocupation === 'pro') {
            $user->college = College::find(Input::get('college'))->name;
            $user->career = Area::find(Input::get('career'))->name;
        }
        $user->save();

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
