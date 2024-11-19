<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\producto;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{

    public function index(){
        $productos = producto::all();
        return view('productos.index',['productos'=> $productos]);
    }
 use AuthenticatesUsers;
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

return redirect(route('index'));
}
public function bienvenido(){
    return view('lasfotos');
}
public function showRegistrationForm()
{
    return view('auth.register');
}
public function login(Request $request) {
    $credentials = [
        "email" => $request->email,
        "password" => $request->password
    ];

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('bienvenido');
    } else {
        return redirect()->route('register')->with('error', 'Correo electrónico o contraseña desconocidos, por favor registrese.');
    }

}


public function logout(Request $request) {
    auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect(route('contacto'));
}

}
