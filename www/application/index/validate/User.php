<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/28
 * Time: 11:05
 */

namespace app\index\validate;


use think\Validate;

class User extends Validate
{
    protected $rule = [
        ['username' , 'require|between:3,9' , '用户名不能为空|用户名必须在3-9个字符之间'],
    ];
}