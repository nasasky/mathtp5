<?php
/**
 * User: Administrator
 */


namespace app\admin\controller;



use think\Controller;


use app\admin\model\AnswerList as AnswerListModel;
use app\admin\model\MathNums as MathNumsModel;
class MathNums extends Controller
{
     public function index()
     {
         $mathInfos = db('math_nums')->select();
         $this->assign('mathInfos',$mathInfos);
         return $this->fetch('lst');
     }

     public function add()
     {
         if(request()->isPost()){
             $data = [
               'content'=>input('content'),
               'result_a'=>input('result_a'),
               'result_b'=>input('result_b'),
               'result_c'=>input('result_c'),
               'result_d'=>input('result_d'),
               'true_select'=>input('true_select'),
             ];
             //dump($data);die;
             $res = db('math_nums')->insert($data);
             if($res){
                 $this->success('添加题目成功','index');
             }else{
                 $this->error('添加题目失败');
             }
         }
         return $this->fetch('add');
     }


     //删除
    public function del($id)
    {//
       // dump($id);
        $res = db('math_nums')->where('id',$id)->del();
        if($res){
            $this->success('删除题目成功','index');
        }else{
            $this->error('删除题目失败');
        }
    }

    //显示第一题题目数据接口
    public function get_maths()
    {
        $mathsNum = db('math_nums')->find();

        return json(['status'=>'200','mathsNum'=>$mathsNum]);

    }


    //根据id获取特定的题目数据
    public function get_maths_byid()
    {
        $id = input('id');
        $mathsNumById = db('math_nums')->where('id',$id)->find();

        return json(['status'=>'200','mathsNumById'=>$mathsNumById]);
    }

    //答题，把答题结果存入数据表
    public function save_answer()
    {
        $saveid = input('saveid');
        $answer= input('answer');
        $data = [
            'math_id'=>$saveid,
            'answer'=>$answer,
        ];
        $result = db('math_nums')->where('id',$saveid)->where('true_select',$answer)->find();
        if($result){
            $data['status'] = 1;
        }else{
            $data['status'] = 0;
        }
        $res = db('answer_list')->insert($data);
        if($res){
            return json(['status'=>'200']);
        }else{
            return json(['status'=>'400']);
        }
    }

    //答题结果
    public function get_result()
    {
        $trueAnswer = 0;

        $AnswerList = new AnswerListModel();
        $newMathNums = new MathNumsModel();
        $answer = $AnswerList->order('id desc')->limit(10)->select();
        $maths = $newMathNums->limit(10)->select();
        //dump($answer);

        for($i=0;$i <count($answer); $i++){
            for ($j=0; $j<count($maths); $j++){
               if($answer[$i]['math_id'] == $maths[$j]['id'] && $answer[$i]['answer'] == $maths[$j]['true_select']){
                   $trueAnswer++;

               }
            }
        }
////        foreach ($answer as $k => $v){)
////           foreach ($maths as $a => $b){
////               if($v['math_id'] == $b['id'] && $v['answer'] == $b['true_select']){
////                   $trueAnswer++;
////               }else{
////                   $falseAnswer++;
////               }
////           }
////        }
///
       // dump($trueAnswer);
        //答错的题目数
        $falseAnswer  = 10 -$trueAnswer;

        //正确概率
        $true_rate = (($trueAnswer / 10)*100)."%";
        //正确得分
        $true_fen = ($trueAnswer*10);

        return json(['trueAnswer'=>$trueAnswer,'falseAnswer'=>$falseAnswer,'true_rate'=>$true_rate,'true_fen'=>$true_fen]);

        //dump($falseAnswer);
    }

    //提取错题集
    public function get_false_subject()
    {
        $falseNums = input('falseNums');
       // $countNum = db('answer_list')->where('status',1)->order('id desc')->limit(10)->sum('status');
        $falseInfo = db('answer_list')->alias('a')->join('math_nums m','a.math_id=m.id')->where('a.status',0)->order('a.id desc')->limit($falseNums)->select();
//        foreach ($falseInfo as $k => $v){
//            if($k)
//        }
        ////$countNum="111";
        //return $falseInfo;
        return json($falseInfo);
    }

    //一次一条提取错题集
    public function get_false_subject_one()
    {
        $falseInfo = db('answer_list')->alias('a')->join('math_nums m','a.math_id=m.id')->where('a.status',0)->order('a.id desc')->limit(10)->last();
        return json($falseInfo);
    }
}