<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 2020/1/21
 * Time: 15:50
 */

namespace app\admin\controller;

use think\Controller;
use app\admin\model\Login as Log;

class Login extends Controller
{
    public function index()
    {
        if (request()->isPost()) {
            $login = new Log;
            $tel = input('tel');
            $status = $login->login($tel, input('password'));
            if ($status == 1) {
                return returnJson([], '登录成功', 200);
            } elseif ($status == 2) {
                return returnJson([], '账号或者密码错误', 401);
            } else {
                return returnJson([], '用户不存在', 400);
            }
        }
        $res = returnJson([], '非法请求', 400);
        return $res;
    }

    /**
     * 退出登录
     */
    public function logout()
    {
        session(null);
        return returnJson([], '退出成功', 200);
    }


}
