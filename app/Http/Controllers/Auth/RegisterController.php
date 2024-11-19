<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\producto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\auth;

class RegisterController extends Controller
{

    public function showRegistrationForm()
{
    return view('auth.register');
}

    public function register(){
        $users = user::all();
        return view('auth.register',['users'=>$users]);
    }
public function almacenar(Request $request){
    $user = new user();
    $user->name =$request->name;
    $user->email =$request->email;
    $user->password =hash::make($request->password);
    $user-> save();
    auth()->login($user);

    return redirect(route('register'));
}
public function create(){
    return view('auth.register');
}
public function index(){
    $productos = producto::all();
    return view('productos.index',['productos'=> $productos]);
}
    }



