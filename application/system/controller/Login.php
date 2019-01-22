<?php

namespace app\system\controller;

use think\Controller;
use think\Request;

class Login extends Controller {

    public function index() {
        return $this->fetch();
    }


    public function login() {

        if(Request::isPost()){
            //获取post数据
            $postData = Request::param();

            //获取数据库对应用户信息
            $model  = model('user');
        }

    }


    public function loginout() {

    }
}
