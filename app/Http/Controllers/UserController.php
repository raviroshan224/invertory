<?php

namespace App\Http\Controllers;

use App\Models\User;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function loginpage()
    {
        // dd(Auth::check());

        if (Auth::check()) {

            return redirect()->route('index');       
         }
         else{
            return view('/login');
         }
        


    }
    public function signinpage(){
        return view('/register');
        
    }
    public function signup(Request $request)
    {



        $input = $request->all();


        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);



        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),

        ]);
        return  redirect()->route('login');
    }
    public function login(Request $request)
    {


        $credentials = $request->validate([

            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {
            $User = Auth::User();

            return  redirect()->route('index', ['name' => $User->name]);
        }
        return "<h2>Username or Password Invalid!</h2>";
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
    //
}
