<?php


namespace app\commands;


use app\modules\algorithmsdemo\BubbleSort;
use app\modules\algorithmsdemo\InsertionSort;
use app\modules\algorithmsdemo\MergeSort;
use app\modules\algorithmsdemo\QuickSort;
use yii\console\Controller;

class DemoController extends Controller
{
    public function actionTest()
    {
        $arr = [2,5,3,7,9,1];
        // 冒泡排序
//        $job = new BubbleSort();
//        $res = $job->bubbleSort($arr);

        // 插入排序
//        $job = new InsertionSort();
//        $res = $job->insertionSort($arr);
//        print_r($res);

        // 归并排序
//        $job = new MergeSort();
//        $job->mergeSort($arr);

        // 快排
        $job = new QuickSort();
        $job->quick_sort($arr);
        print_r($arr);
    }
}