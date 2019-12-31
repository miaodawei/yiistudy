<?php


namespace app\commands;


use app\modules\algorithms\services\ClimbingStairs;
use yii\console\Controller;
use yii\console\ExitCode;

class TestController extends Controller
{
    public function actionTest()
    {
        $job = new ClimbingStairs();
        $res =  $job->climbingStairsByFibonacciSequence(6);
        echo '  '.$res.'  ';
        return ExitCode::OK;
    }
}