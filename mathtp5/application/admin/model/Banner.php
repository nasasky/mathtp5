<?php
/**
 * User: Administrator
 */

namespace app\admin\model;
use think\Model;

class Banner extends Model
{
    public function getImgSrcAttr($value){
        return 'http://www.legou.com'.$value;
    }

}