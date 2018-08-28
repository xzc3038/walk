<?php

namespace app\index\controller;


use app\model\Article;
use app\model\Sentence;

class Index extends Controller
{
    public function index()
    {
        //文章
        $articleList = Article::order('createtime','desc')->paginate(10);
        $pageList = $articleList->render();

        //每日一句
        $sentence = new Sentence();
        $count = $sentence->where('status','normal')->count();
        if($count != 0){
            $num = rand(1,$count);
            $sentenceOne = $sentence->where('sid',$num)->value('content');
        }else{
            $sentenceOne = '尽请期待';
        }

        $this->assign(['articleList' => $articleList , 'pageList' => $pageList , 'sentence' => $sentenceOne]);
        return $this->fetch();
    }
}
