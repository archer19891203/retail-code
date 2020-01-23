<?php
use think\Route;
/**
 * Created by PhpStorm.
 * User: king
 * Date: 2020/1/21
 * Time: 14:29
 */
//Route::rule('hello','admin/Index/test', 'get');

Route::rule('admin/api/login','admin/Login/index', 'POST');