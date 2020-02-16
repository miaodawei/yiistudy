<?php
/**
 * 冒泡排序
 */

namespace app\modules\algorithmsdemo;


class BubbleSort
{
    public function bubbleSort($arr)
    {
        $n = count($arr);
        if($n <= 1) {
            return $arr;
        }
        for($i = 0; $i < $n; ++ $i) {
            // 外层每循环一次，需要比较的元素就少一个
            // $n - $i 是剩余需要比较的元素个数
            // 假定剩余需要比较的元素个数=x，则需要比较(x - 1)次，即：外层循环每一个元素$i，需要比较$n - $i - 1次
            for($j = 0; $j < $n - $i - 1; ++ $j) {
                if($arr[$j] > $arr[$j + 1]) {
                    $tmp = $arr[$j + 1];
                    $arr[$j + 1] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }
        }
        return $arr;
    }
}