<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\http\Request;
use app\models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\auth;

class Controller extends BaseController
{

   public function login(Request $request) {
    $credencials=[
        "email"=>$request ->email,
        "password"=>$request ->password
        //*all active =>
    ];
    $remember=($request->has('remember')?true:false);
    if (Auth::attempt($credencials,$remember)) {
        $request->session()->regenerate();
}else{
    return redirect('login');
}
   }
public function logout(Request $request) {
    auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect(route('login'));
}
}
