<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;

class UserRegister extends Controller
{
    //
    public function userregister (Request $req) {
        $this->validate($req,[
            'username'=>'max:15|min:6|required',
            'password'=>'max:15|min:6|required',
            ''
        ]);
    }
}
