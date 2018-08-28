<?php

namespace app\index\controller;



class User extends Controller
{
    public function login(){
        return true;
    }

    public function registed(){
        //验证
        $user = new \app\model\User();
        $data = input('post.');
        if($this->validate($data,'User')){
            if($user->allowField(false)->save($data)){
                $this->success('注册成功');
            }else{
                $this->error('注册失败，请稍后重试');
            }
        }else{
            $this->error($user->getError());
        }
    }

    public function forgotpwd(){
        return true;
    }

    public function resetpwd(){
        return true;
    }
}