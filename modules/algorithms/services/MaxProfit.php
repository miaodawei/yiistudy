<?php
/**
 * Created by PhpStorm.
 * User: work_
 * Date: 2020/1/3
 * Time: 23:50
 */

namespace app\modules\algorithms\services;


class MaxProfit
{
    public function maxProfit($prices) {
        $max = $leftMin = 0;
        $left = 0;
        $right = count($prices) - 1;
        while(true) {
            if($left == $right) {
                break;
            }
            $leftData = $prices[$left];
            $rightData = $prices[$right];
            if($leftData <= $rightData) {
                $max = $rightData - $leftData;
            }
        }
    }
}