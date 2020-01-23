<?php
namespace app\admin\model;
use think\Model;
use \think\Db;
use \think\Session;
class Login extends Model
{
    public function login($tel,$password){
        $admin= Db::name('admin')->where('tel','=',$tel)->find();
        if($admin){
            if($admin['password']==md5($password)){
                Session::set('id',$admin['id']);
                Session::set('tel',$admin['tel']);
                return 1;
            }else{
                return 2;
            }
        }else{
            return 3;
        }
    }
}
