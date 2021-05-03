<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use App\Models\Users;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
class AuthController extends Controller
{
    public function getSignup(){


        return view ('auth.signup');
    }

   public function postSignUp(Request $request){


    $array=collect($request->only(['name','email']))->put('password',bcrypt($request->password))->all();
    User::create($array);
       return redirect()->back()->with('success', 'successfull register');
   }
    public function getLogin(){
        return view ('auth.login');
    }

    public function postLogin(Request $request){

        if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))){

            return redirect()->back()->with('info', 'could not sign you in with those details');

        }

        return redirect()->route('dashboard')
            ->with('info', 'you are successfully signed in!');



    }

       public function dashboard(){

           return view ('dashboard')->with([

           ]);
       }
}
