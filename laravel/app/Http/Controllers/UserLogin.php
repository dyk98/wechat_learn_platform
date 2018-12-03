<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;


class UserLogin extends Controller
{
    //
    public function userlogin(Request $req)
    {
        $this->validate($req, [
            'username' => 'max:15|min:6|required',
            'password' => 'max:15|min:6|required',
        ]);
        if (Auth::once(['username' => $req->username, 'password' => $req->password])) {
            return Auth::user()->api_token;
        } else {
            return response('账号或密码错误',401);
        }
    }

}
