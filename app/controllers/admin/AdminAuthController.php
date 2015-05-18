<?php
/**
 * Created by PhpStorm.
 * User: koramaiku
 * Date: 18/05/15
 * Time: 2:05 PM
 */

class AdminAuthController extends \BaseController {
    public function getLogin(){
        return View::make('admin.auth.login');
    }

    public function postLogin(){
        $data = Input::all();

        $validator = Validator::make($data, User::$auth_rules);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }

        if(Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))){

            //re-route to the intended controller that the login is supposed to go after login has been successful.
            return Redirect::intended();
        }

        return Redirect::route('admin.login');
    }

    public function getLogout(){
        Auth::logout();
        return Redirect::route('admin.login');
    }

}