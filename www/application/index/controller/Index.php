<?php
namespace app\index\controller;

use app\model\User;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
       $name = User::value('username');
       return $name;
    }
}
