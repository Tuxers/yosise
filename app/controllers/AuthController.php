<?php
class AuthController extends BaseController {
    public function login() {
        if (!Auth::check()) {
            return View::make('auth.login');
        }
        return Redirect::to('/');
    }

    public function doLogin() {
        $username = Input::get('username');
        $password = Input::get('password');

        if (Auth::attempt(['username'=>$username, 'password'=>$password])) {
            return Redirect::intended('/');
        }

        return Redirect::to('/login');
    }

    public function doLogout() {
        Auth::logout();

        return Redirect::to('/');
    }
}
