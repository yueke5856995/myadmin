<?php
// 应用公共文件

/**
 * 公共方法：验证登录信息
 * @param $upData 提交用户身份信息
 * @param $checkData 验证用户身份信息
 */
function check_login($upData, $checkData) {
    $rs['status'] = 0;

    //验证信息
    if (!captcha_check($upData->varify)) { //验证验证码一致
        $rs['msg'] = '验证码不正确';

    } elseif (empty($checkData)) { //验证用户名
        $rs['msg'] = '用户名不存在';

    } elseif ($upData->password != $checkData->password) { //验证密码 md5加密
        $rs['msg'] = '账号或密码错误';

    } else {//通过验证 记录session
        session('user_admin', $checkData);
        $rs['status'] = 1;

    }

    return $rs;

}