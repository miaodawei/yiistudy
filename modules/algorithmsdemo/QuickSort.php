<?php
/**
 * 快速排序
 */


namespace app\modules\algorithmsdemo;


class QuickSort
{
    public function quick_sort(&$arr)
    {
        $this->quick_sort_c($arr, 0, count($arr)-1);
    }

    private function quick_sort_c(&$arr, $p, $r)
    {
        if($p >= $r) {
            return;
        }
        $q = $this->partition($arr, $p, $r);
        $this->quick_sort_c($arr, $p, $q-1);
        $this->quick_sort_c($arr, $q+1, $r);
    }

    private function partition(&$arr, $p, $r)
    {
        $pivot = $arr[$r];
        $i = $j = $p;
        for(; $j < $r; $j ++) {
            if($arr[$j] < $pivot) {
                $tmp = $arr[$i];
                $arr[$i++] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
        $tmp = $arr[$i];
        $arr[$i] = $pivot;
        $arr[$r] = $tmp;
        return $i;
    }


}