<?php
/**
 * User: Administrator
 */
namespace app\admin\model;



use think\Model;

class Cate extends Model
{
    public function getTree()
    {
        $cates = db('cate')->select();
        return $this->getSonTree($cates);
    }

    private function getSonTree($data,$pid=0,$level=0)
    {
        static $arr = array();
        foreach ($data as $k => $v){
            if($v['pid'] == $pid){
                $v['level'] = $level;
                $arr[] = $v;
                $this->getSonTree($data,$v['id'],$level+1);
            }
        }

        return $arr;
    }

    public function getThumbAttr($value){
        return 'http://www.legou.com'.$value;
    }
}