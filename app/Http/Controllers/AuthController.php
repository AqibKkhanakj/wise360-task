<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginShow(){
        return view('login');
    }
    public function loginSubmit(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);
        // $user = User::where('email','=',$request->email)->first();
        // if($user){
        //   if(Hash::check($request->password, $user->password)){
        //      $request->session()->put('loginid', $user->id);
        //      return redirect()->route('home.show');
        //   }
        //   else{
        //     return back()->with('fail', 'Oh! Password does not match..');
        //   }
        // }
        // else{
        //     return back()->with('fail', 'Oh! Please fill the right credentials..');
        // }
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email',$email)->where('password', $password)->get();
        if($user->isNotEmpty()){
          return redirect()->route('home.show');
        }
        else{
            return redirect()->route('signup.show');
        }
    }
    public function logout(){

    }
    public function showhome(){
        return view('home');
    }
    public function signupShow(){
        return view('sigup');
    }
    public function userSignup(Request $request){
                //Applying validations
                  $request->validate([
                    'name'=>'required',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|min:5'
                  ]);
                  $user = new User();
                  $user->name = $request->name;
                  $user->email = $request->email;
                  $user->password = Hash::make($request->password);
                  $res = $user->save();
                  if ($res){
                    return back()->with('success', 'You have been registered successfully');
                  }
                  else{
                    return back()->with('fail', 'Please fill the form carefully');
                  }
    }
}
