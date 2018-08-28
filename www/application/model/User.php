<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/27
 * Time: 11:50
 */

namespace app\model;


use think\Model;

class User extends Model
{
    protected $name = 'user';

    //读取器(如果写了$user->create_time 就会调用这个方法，不写会调用默认方法；第一个参数是传入的参数，第一个参数是整个user)
//    public function getCreateTimeAttr($time){
//        return date('Y-m-d H:i:s',$time);
//    }
    //修改器 setCreateTimeAttr($time, $data){}

//    类型转换
//      protected $type = array(
//        'create_time' => 'timestamp: Y-m-d',
//    );在读取和写入时，自动转换

//    自动完成 protected $update = array(
//        'createtime' => '0',
//    );在写入时，自动存入
}