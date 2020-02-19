<?php

namespace app\modules\algorithmstest;


class Sort
{
    public function quickSort($a, $n, $value)
    {
        // $a = [1,3,4,5,6,8,8,8,11,18];
        $low = 0;
        $high = $n - 1;
        while($low <= $high) {
            $mid = $low + (($high - $low) >> 1);
//            echo '  '.$mid.'  ';die;
            if($a[$mid] > $value) {
                $high = $mid - 1;
            }elseif($a[$mid] < $value) {
                $low = $mid + 1;
            }else {
                if(($mid == 0) || $a[$mid - 1] != $value)
                    return $mid;
                else
                    $high = $mid - 1;
            }
        }
        return -1;
    }

    public function bsearchLastValue($a, $n, $value)
    {
        $low = 0;
        $high = $n - 1;
        while($low <= $high) {
            $mid = $low + (($high - $low) >> 1);
            if($a[$mid] < $value) {
                $low = $mid + 1;
            }elseif($a[$mid] > $value) {
                $high = $mid - 1;
            }else {
                if($mid == ($n - 1) || $a[$mid + 1] != $value)
                    return $mid;
                else
                    $low = $mid + 1;
            }
        }
        return -1;
    }
}