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
                $value = $arr[$i]; // 每次拿一个元素
                $j = $i - 1; // 本次需要排序元素的前一个key
                for(; $j >= 0; $j --) {
                    // 向前依次比较
                    if($arr[$j] > $value) {
                        // 如果当前值大于本次排序的值，将当前元素向后移动，然后继续向前比较
                        $arr[$j + 1] = $arr[$j];
                    }else {
                        // 如果当前值不比排序的值大，就不继续向前比较了
                        break;
                    }
                }
                // 将元素插入到最后比较的元素后边
                $arr[$j + 1] = $value;
            }
        }
        return $arr;
    }
}