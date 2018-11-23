<?php
namespace app\index\controller;
use think\Controller;
use \think\Request;
class Index extends Controller
{
    public function index()
    {
        $info = Db('banner')->where('type',1)->select();
        $info2 = Db('banner')->where('type',0)->select();
        $info1 = Db('neirong')->where('type',1)->select();
        $info5 = Db('xinwen')->select();
        $info4 = Db('neirong')->where('type',4)->find();
        $info3 = Db('case')->select();
        $this->assign('info',$info);
        $this->assign('info1',$info1);
        $this->assign('info2',$info2);
        $this->assign('info3',$info3);
        $this->assign('info4',$info4);
        $this->assign('info5',$info5);
        return view();
    }

    public function about()
    {
        $info = Db('banner')->where('type',2)->select();
        $info1 = Db('neirong')->where('type',2)->select();
        $info2 = Db('neirong')->where('type',3)->select();
        $this->assign('info1',$info1);
        $this->assign('info2',$info2);
        $this->assign('info',$info);
        return view();
    }

    public function cases()
    {
        $info1 = Db('banner')->where('type',3)->select();
        $info = Db('case')->select();
        $this->assign('info',$info);
        $this->assign('info1',$info1);
        return view();
    }

    public function casedetail()
    {
        $id = Request::instance()->param('id');
        $info = Db('case')->where('id',$id)->find();
        $info1 = Db('case')->select();
        $this->assign('info',$info);
        $this->assign('info1',$info1);
        return view();
    }

    public function product()
    {
        $info = Db('banner')->where('type',7)->select();
        $info1 = Db('banner')->where('type',4)->select();
        $this->assign('info',$info);
        $this->assign('info1',$info1);
        return view();
    }

    public function news()
    {
        $info = Db('banner')->where('type',5)->select();
        $info5 = Db('xinwen')->select();
        $this->assign('info',$info);
        $this->assign('info5',$info5);
        return view();
    }

    public function contact()
    {
        $info = Db('banner')->where('type',6)->select();
        $this->assign('info',$info);
        return view();
    }

    public function newsdetail(){
        $id = Request::instance()->param('id');
        $info = Db('xinwen')->where('id',$id)->find();
        $info1 = Db('case')->select();
        $this->assign('info',$info);
        $this->assign('info1',$info1);
        return view();
    }
}
