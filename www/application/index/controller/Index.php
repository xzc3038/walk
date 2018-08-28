<?php

namespace app\index\controller;


use app\model\Article;

class Index extends Controller
{
    public function index()
    {
        $articleList = Article::order('createtime','desc')->paginate(10);
        $pageList = $articleList->render();
        $this->assign(['articleList' => $articleList , 'pageList' => $pageList]);
        return $this->fetch();
    }
}
