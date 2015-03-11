<?php
/**
 * Created by PhpStorm.
 * User: loubeier
 * Date: 15-1-12
 * Time: 下午8:58
 */
namespace Home\Controller;
use Think\Controller;
class DetailController extends Controller {
    public function index(){

        header("Content-type:text/html;charset=utf-8");
        $id = $_GET['id'];
        $Movie = M('Movie');
        $mdetail = $Movie->where('id='.$id)->select();
        dump($mdetail);
        $movie_actor = M('movie_actor');
        $actors = $movie_actor->where('movie_id='.$id)->join('actor on actor.id = movie_actor.actor_id')->select();
        dump($actors);
        $this->assign(
            array('mdetail'=>$mdetail[0],'actors'=>$actors)
        );
        $this->display();


        //$Movie = M("Movie");
        //$detail = $Movie->where('id=1')->select();
        //var_dump($detail);
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
}