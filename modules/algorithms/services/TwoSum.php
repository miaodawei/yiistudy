<?php
/**
 * 两数之和
 */


namespace app\modules\algorithms\services;


class TwoSum
{
    public function myselfTwoSum($nums, $target)
    {
        $count = count($nums) - 1;
        for($i = 0; $i <= $count; $i ++) {
            for($j = $count; $j >= 0; $j --) {
                if($nums[$i] + $nums[$j] == $target && $i != $j) {
                    return [$i, $j];
                }
            }
        }
        return [];
    }

    public function twoSumByHashMap($nums, $target)
    {
        $count = count($nums) - 1;
        $nums2 = array_flip($nums);
        for($i = 0; $i <= $count; $i ++) {
            $diff = $target - $nums[$i];
            $j = $nums2[$diff];
            if($j && $j != $i) {
                return [$i, $j];
            }
        }
        return [];
    }
}