<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use EasyWeChat\Factory;

class WechatController extends Controller
{
    //微信登陆
    public function userwxlogin(Request $req)
    {
        $app = app('wechat.official_account');
//        $app->auth->session(string $code);
    }
}
