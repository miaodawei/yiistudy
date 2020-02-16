<?php


namespace app\commands;


use app\modules\algorithmsdemo\BubbleSort;
use yii\console\Controller;

class DemoController extends Controller
{
    public function actionTest()
    {
        $arr = [2,5,3,7,9,1];
        $job = new BubbleSort();
        $res = $job->bubbleSort($arr);
        print_r($res);
    }
}