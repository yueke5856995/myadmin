<?php

namespace app\system\controller;

use think\App;
use think\Controller;

class Common extends Controller {
    /**
     * common constructor.
     * @param App|null $app
     * 检查登录态，未登录跳转登录页面
     */
    public function __construct(App $app = null) {
        parent::__construct($app);
        $this->userAdmin=session('user_system');
        if($this->userAdmin==null){
            return $this->redirect('Login/index');
        }
    }

    public function getCheckCode(){

    }
}
