<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login_Controller extends Controller
{
    public function get_login(){
        return view("admin.auth.login");
    }
    public function _login(AdminLogin $login){
        $remember_me = $login->has('remember_me') ? true : false;

        if (auth()->guard("admin")->attempt([
            'email'=>$login->email,"password"=>$login->password
        ]))
        {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with(["error"=>"Login Data Error"])->withInput(["email"=>$login->email]);
    }


}
