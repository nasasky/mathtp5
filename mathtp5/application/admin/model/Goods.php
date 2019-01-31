<?php
/**
 * User: Administrator
 */

namespace app\admin\model;
use think\Model;

class Goods extends Model
{
    protected  $file = true;
    protected static function init()
    {
        Goods::afterInsert(function ($goods) {
            $data = input('post.');
            $goodsId = $goods->id;
            $goods->upload($goodsId);
            if(isset($data['spe'])){
                foreach ($data['spe'] as $k => $v){
                    db('goods_spe')->insert(['goods_id'=>$goodsId,'spe_id'=>$v]);
                }
            }
        });

    }

    //多图上传
    public function upload($goodsId){
        // 获取表单上传文件
        $files = request()->file('img_src');
       // dump($files);die;
        foreach($files as $file){
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads/admin/goods/img_srcs');
            if($info){
                // 成功上传后 获取上传信息
                // 输出 jpg

                $thumb = '/uploads/admin/goods/img_srcs/'.$info->getSaveName();
                $thumb1 = str_replace('\\','/',$thumb);
                // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                db('photos')->insert(['goods_id'=>$goodsId,'img_src'=>$thumb1]);
                //$data['thumb'] = $thumb1;

            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
    }

}