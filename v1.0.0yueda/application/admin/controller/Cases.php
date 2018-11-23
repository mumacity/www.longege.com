<?php
namespace app\admin\controller;

use think\Controller;
use \think\Request;
class Cases extends Controller
{
    public function cases()
    {
        return view();
    }

    public function cases1()
    {
        return view();
    }

    public function case1()
    {
        $info = Db('case')->select();
        $this->assign('info',$info);
        return view();
    }

    public function case2()
    {
        $info = Db('xinwen')->select();
        $this->assign('info',$info);
        return view();
    }

    public function del($id)
    {
        $res = Db('case') -> delete($id);
        if($res){
            $this->success('删除成功',"admin/cases/case1");
        }
    }

    public function del1($id)
    {
        $res = Db('xinwen') -> delete($id);
        if($res){
            $this->success('删除成功',"admin/cases/case2");
        }
    }

    public function add()
    {
        $file = request()->file("img");
        if($file){
            //$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            $info = $file->move('upload');
            if($info){
                $data['img'] = '/'.$info->getPathname();
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
        $data['title']=Request::instance()->param('title');
        $data['jianjie']=Request::instance()->param('jianjie');
        $data['info']=Request::instance()->param('info');
        $res = Db('case') -> insert($data);
        if($res){
            $this->success('添加成功',"admin/cases/case1");
        }else{
            $this->success('添加失败',"admin/cases/case1");
        }

    }

    public function add1()
    {
        $file = request()->file("img");
        if($file){
            //$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            $info = $file->move('upload');
            if($info){
                $data['img'] = '/'.$info->getPathname();
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
        $data['biaoti']=Request::instance()->param('biaoti');
        $data['shijian']=Request::instance()->param('shijian');
        $data['jianjie']=Request::instance()->param('jianjie');
        $data['neirong']=Request::instance()->param('neirong');
        $res = Db('xinwen') -> insert($data);
        if($res){
            $this->success('添加成功',"admin/cases/case2");
        }else{
            $this->success('添加失败',"admin/cases/case2");
        }

    }

    public function c_info()
    {
        $info = Db('neirong')->where('type',2)->select();
        $this->assign('info',$info);
        return view();
    }

    public function c_info1()
    {
        $info = Db('neirong')->where('type',3)->select();
        $this->assign('info',$info);
        return view();
    }

    public function c_edit()
    {
        $id = Request::instance()->param('id');
        $info = Db('neirong')->where('id',$id)->find();
        $this->assign('info',$info['about']);
        $this->assign('id',$id);
        return view();
    }

    public function c_edit1()
    {
        $id = Request::instance()->param('id');
        $info = Db('neirong')->where('id',$id)->find();
        $this->assign('info',$info['about1']);
        $this->assign('id',$id);
        return view();
    }

    public function c_add()
    {
        $id = Request::instance()->param('id');
        $data['about']=Request::instance()->param('info');
        $res = Db('neirong')->where('id', $id)->update($data);
        if($res){
            $this->success('修改成功',"admin/cases/c_info");
        }else{
            $this->success('修改失败',"admin/cases/c_info");
        }
    }

    public function c_add1()
    {
        $id = Request::instance()->param('id');
        $data['about1']=Request::instance()->param('info');
        $res = Db('neirong')->where('id', $id)->update($data);
        if($res){
            $this->success('修改成功',"admin/cases/c_info1");
        }else{
            $this->success('修改失败',"admin/cases/c_info1");
        }
    }
}