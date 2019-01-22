<?php

namespace app\system\model;

use think\facade\Request;
use think\Model;

//用户数据模型
class User extends Common {


    public function getUserInfo(){
        $userId = Request::userId;
        return User::get($userId);
    }
}
