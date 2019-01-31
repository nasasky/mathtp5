<?php
namespace app\admin\controller;

use think\Controller;
use \think\Db;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch('index');
    }

    public function add()
    {


        return $this->fetch('add');
    }

    public function lst()
    {

        return $this->fetch('lst');
    }

    public function edit($id)
    {


        return $this->fetch('edit');
    }

}



