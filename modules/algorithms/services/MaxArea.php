<?php


namespace app\modules\algorithms\services;


class MaxArea
{
    public function maxArea($hight = []) {
        $maxArea = 0;
        $left = 0;
        $right = count($hight) - 1;
        $currentMin = 0;
        while(true) {
            if($left == $right) {
                break;
            }
            $min = $hight[$left] < $hight[$right] ? $hight[$left ++] : $hight[$right --];
            if($min <= $currentMin) {
                continue;
            }
            $currentMin = $min;
            $area = ($right - $left + 1) * $min;
            $maxArea = $maxArea > $area ? $maxArea : $area;
        }
        return $maxArea;
    }
}