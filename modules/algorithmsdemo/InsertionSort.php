<?php
/**
 * 插入排序
 */

namespace app\modules\algorithmsdemo;


class InsertionSort
{
    public function insertionSort($arr)
    {
        $n = count($arr);
        if($n > 1) {
            for($i = 1; $i < $n; $i ++) {
                $value = $arr[$i];
                $j = $i - 1;
                for(; $j >= 0; $j --) {
                    if($arr[$j] > $value) {
                        $arr[$j + 1] = $arr[$j];
                    }else {
                        break;
                    }
                }
                $arr[$j + 1] = $value;
            }
        }
        return $arr;
    }
}