<?php


namespace app\commands;


use app\modules\algorithms\services\ClimbingStairs;
use app\modules\algorithms\services\TwoSum;
use app\modules\algorithms\services\MaxArea;
use yii\console\Controller;
use yii\console\ExitCode;

class TestController extends Controller
{
    public function actionTest()
    {
        $job = new TwoSum();
        $res =  $job->twoSumByHashMap([2,7,11,15], 9);
        echo '<pre>';
        print_r($res);
        return ExitCode::OK;
    }

    public function actionMaxArea() {
        $job = new MaxArea();
        $res = $job->maxArea([1,8,6,2,5,4,8,3,7]);
        echo '  '.$res.'  ';
        return ExitCode::OK;
    }
}