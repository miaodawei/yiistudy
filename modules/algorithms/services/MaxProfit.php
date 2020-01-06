<?php
/**
 * Created by PhpStorm.
 * User: work_
 * Date: 2020/1/3
 * Time: 23:50
 * 买卖股票的最佳时机
 */

namespace app\modules\algorithms\services;


class MaxProfit
{
    // 找到最小的谷之后的最大的峰
    public function maxProfit($prices) {
        $min = $prices[0];
        $max = 0;
        foreach($prices as $val) {
            if($min > $val) {
                $min = $val;
            }else {
                $diff = $val - $min;
                $max = $max > $diff ? $max : $diff;
            }
        }
        return $max;
    }
}