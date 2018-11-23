<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
use \think\Request;
class Banner extends Controller
{
    public function banner()
    {
        $banner = Db('banner')->where('type',1)->select();
        $this->assign('banner',$banner);
        return view();
    }

    public function bannerimg()
    {

        $file = request()->file("banner");
        if($file){
            //$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            $info = $file->move('upload');
            if($info){
                $data['banner'] = '/'.$info->getPathname();
                $data['type']=1;
                Db('banner') -> insert($data);
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
        $this->success('添加成功',"admin/banner/banner");

    }

    public function addbanner()
    {
        return view();
    }

    public function addbanner1()
    {
        return view();
    }
    public function addbanner2()
    {
        return view();
    }

    public function addbanner3()
    {
        return view();
    }

    public function addbanner4()
    {
        return view();
    }

    public function addbanner5()
    {
        return view();
    }

    public function addbanner6()
    {
        return view();
    }

    public function addbanner7()
    {
        return view();
    }

    public function banner3()
    {
        $banner = Db('banner')->where('type',3)->select();
        $this->assign('banner',$banner);
        return view();
    }

    public function banner4()
    {
        $banner = Db('banner')->where('type',4)->select();
        $this->assign('banner',$banner);
        return view();
    }

    public function banner5()
    {
        $banner = Db('banner')->where('type',5)->select();
        $this->assign('banner',$banner);
        return view();
    }

    public function banner6()
    {
        $banner = Db('banner')->where('type',6)->select();
        $this->assign('banner',$banner);
        return view();
    }

    public function banner7()
    {
        $banner = Db('banner')->where('type',7)->select();
        $this->assign('banner',$banner);
        return view();
    }

    public function banner2()
    {
        $banner = Db('banner')->where('type',2)->select();
        $this->assign('banner',$banner);
        return view();
    }

    public function delbanner($id)
    {
        $res = Db('banner') -> delete($id);
        if($res){
            $this->success('删除成功',"admin/banner/banner");
        }
    }
    public function delbanner1($id)
    {
        $res = Db('banner') -> delete($id);
        if($res){
            $this->success('删除成功',"admin/banner/banner1");
        }
    }
    public function delbanner2($id)
    {
        $res = Db('banner') -> delete($id);
        if($res){
            $this->success('删除成功',"admin/banner/banner2");
        }
    }

    public function delbanner3($id)
    {
        $res = Db('banner') -> delete($id);
        if($res){
            $this->success('删除成功',"admin/banner/banner3");
        }
    }

    public function delbanner4($id)
    {
        $res = Db('banner') -> delete($id);
        if($res){
            $this->success('删除成功',"admin/banner/banner4");
        }
    }

    public function delbanner5($id)
    {
        $res = Db('banner') -> delete($id);
        if($res){
            $this->success('删除成功',"admin/banner/banner5");
        }
    }

    public function delbanner6($id)
    {
        $res = Db('banner') -> delete($id);
        if($res){
            $this->success('删除成功',"admin/banner/banner6");
        }
    }

    public function delbanner7($id)
    {
        $res = Db('banner') -> delete($id);
        if($res){
            $this->success('删除成功',"admin/banner/banner7");
        }
    }

    public function neirong()
    {
        $banner = Db('neirong')->where('type',1)->select();
        $this->assign('banner',$banner);
        return view();
    }

    public function editneirong()
    {
        $id = Request::instance()->param('id');
        $zz = Db('neirong')->where('id',$id)->find();
        $this->assign('zz',$zz);
        $this->assign('id',$id);
        return view();
    }

    public function editneironginfo()
    {
        $id = Request::instance()->param('id');
        $data['neirong']=Request::instance()->param('neirong');
        $res = Db('neirong')->where('id', $id)->update($data);
        if($res){
            $this->success('成功',"admin/banner/neirong");
        }
    }

    public function banner1()
    {
        $banner = Db('banner')->where('type',0)->select();
        $this->assign('banner',$banner);
        return view();
    }


    public function bannerimg1()
    {

        $file = request()->file("banner");
        $url = Request::instance()->param('url');
        if($file){
            //$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            $info = $file->move('upload');
            if($info){
                $data['banner'] = '/'.$info->getPathname();
                $data['type']=0;
                $data['url']=$url;
                Db('banner') -> insert($data);
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
        $this->success('添加成功',"admin/banner/banner1");

    }

    public function bannerimg2()
    {

        $file = request()->file("banner");
        if($file){
            //$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            $info = $file->move('upload');
            if($info){
                $data['banner'] = '/'.$info->getPathname();
                $data['type']=2;
                Db('banner') -> insert($data);
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
        $this->success('添加成功',"admin/banner/banner2");

    }

    public function bannerimg3()
    {

        $file = request()->file("banner");
        if($file){
            //$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            $info = $file->move('upload');
            if($info){
                $data['banner'] = '/'.$info->getPathname();
                $data['type']=3;
                Db('banner') -> insert($data);
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
        $this->success('添加成功',"admin/banner/banner3");

    }

    public function bannerimg4()
    {

        $file = request()->file("banner");
        if($file){
            //$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            $info = $file->move('upload');
            if($info){
                $data['banner'] = '/'.$info->getPathname();
                $data['type']=4;
                Db('banner') -> insert($data);
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
        $this->success('添加成功',"admin/banner/banner4");

    }

    public function bannerimg5()
    {

        $file = request()->file("banner");
        if($file){
            //$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            $info = $file->move('upload');
            if($info){
                $data['banner'] = '/'.$info->getPathname();
                $data['type']=5;
                Db('banner') -> insert($data);
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
        $this->success('添加成功',"admin/banner/banner5");

    }

    public function bannerimg6()
    {

        $file = request()->file("banner");
        if($file){
            //$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            $info = $file->move('upload');
            if($info){
                $data['banner'] = '/'.$info->getPathname();
                $data['type']=6;
                Db('banner') -> insert($data);
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
        $this->success('添加成功',"admin/banner/banner6");

    }

    public function bannerimg7()
    {

        $file = request()->file("banner");
        if($file){
            //$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            $info = $file->move('upload');
            if($info){
                $data['banner'] = '/'.$info->getPathname();
                $data['type']=7;
                Db('banner') -> insert($data);
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
        $this->success('添加成功',"admin/banner/banner7");

    }

    public function keywords()
    {
        $info = Db('neirong')->where('type',4)->select();
        $this->assign('info',$info);
        return view();
    }

    public function e_keywords()
    {
        $id = Request::instance()->param('id');
        $info = Db('neirong')->where('id',$id)->find();
        $this->assign('info',$info);
        $this->assign('id',$id);
        return view();
    }

    public function edit_ifno()
    {
        $id = Request::instance()->param('id');
        $data['keywords']=Request::instance()->param('url');
        $res = Db('neirong')->where('id', $id)->update($data);
        if($res){
            $this->success('成功',"admin/banner/keywords");
        }
    }
}