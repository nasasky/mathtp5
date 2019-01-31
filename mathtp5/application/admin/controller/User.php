<?php
namespace app\admin\controller;

use think\Controller;
use \think\Db;

class User extends Controller
{
    public function index()
    {
        $userInfo = db('user')->select();
        $this->assign('userInfo',$userInfo);
        return $this->fetch('index');
    }


    public function del($id)
    {
        $res = db('user')->where('id',$id)->delete();
        if($res){
            $this->success('删除咨询人员成功','index');
        }else{
            $this->error('删除咨询人员失败!');
        }
    }





    //小程序表单接口
    public function insert_user()
    {
        $data = [
            'name'=>input('name'),
            'age'=>input('age'),
            'phone'=>input('phone'),
            'project'=>input('project'),
        ];

        $res = db('user')->insert($data);
        if($res){
            return json(['status'=>200,'msg'=>'提交成功!']);
        }else{
            return json(['status'=>400,'msg'=>'提交失败，请重新提交!']);
        }


    }

}



