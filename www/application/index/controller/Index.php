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

        $this->assign(['articleList' => $articleList , 'pageList' => $pageList]);
        return $this->fetch();
    }

    /**
     * 每日一句|热门文章
     * @return mixed|string
     */
    public function side(){
        if($this->request->isPost()){
            //每日一句
            $sentence = new Sentence();
            $count = $sentence->where('status','normal')->count();
            if($count != 0){
                $num = rand(1,$count);
                $sentenceOne = $sentence->where('sid',$num)->value('content');
            }else{
                $sentenceOne =  '尽请期待';
            }

            //热门文章
            $article = Article::order('view','asc')->limit(3)->select();

            return ['sentenceOne' => $sentenceOne , 'article' => $article];
        }
    }

    public function detile(){
        return $this->fetch();
    }

    public function search(){

    }
}
