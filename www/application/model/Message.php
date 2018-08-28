<?php

namespace app\model;


use think\Model;

class Message extends Model
{
    protected $name = 'message';

    public function user(){
        return $this->hasOne('User','uid','id');
    }
}