<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\{User,Plan};
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class customAuth extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }

    public function postLogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $data=$request->only('email','password');
        if(Auth::attempt($data)){

        Alert::success('Loggedin Successfully','Welcome to Plan manager....its time for planning your life');
        return redirect('/');
        }
        return redirect('/login');
    }

    public function register(){
        return view('auth.register');
    }

    public function postRegister(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
        ]);
        $data=$request->all();
        $this->create($data);
        Alert::success('Loggedin Successfully','Welcome to Plan manager....its time for planning your life');
        return redirect('/');
    }

    public function create(array $data){
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
        ]);
    }

    public function logout(){
        session::flush();
        Auth::logout();
        return redirect('/login');
    }
}
