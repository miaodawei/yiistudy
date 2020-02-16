<?php
namespace app\modules\algorithms\services;
class MaxArea {
    public function maxArea($height) {
        $max = $currentMin = 0;
        $left = 0;
        $right = count($height) - 1;
        while(true) {
            if($left == $right) {
                break;
            }
            $min = $height[$left] < $height[$right] ? $height[$left ++] : $height[$right --];
            if($min < $currentMin) {
                continue;
            }
            $currentMin = $min;
            $area = ($right - $left + 1) * $min;
            $max = $max > $area ? $max : $area;
        }
        return $max;
    }
}