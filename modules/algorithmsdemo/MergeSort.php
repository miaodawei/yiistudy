<?php
/**
 * 归并排序
 */


namespace app\modules\algorithmsdemo;


class MergeSort
{
    public function mergeSort(&$arr)
    {
        $n = count($arr);
        if($n <= 1) {
            return $arr;
        }
        $this->mergeSortC($arr, 0, $n - 1);
        return $arr;
    }

    private function mergeSortC(&$arr, $p, $r)
    {
        if($p >= $r) {
            return;
        }
        $q = floor(($p + $r) / 2); // 需要使用向下取整，因为向上取整会无限循环
        $this->mergeSortC($arr, $p, $q);
        $this->mergeSortC($arr, $q+1, $r);
        $info = [];
        $this->merge($arr,$info, ['start'=>$p, 'end'=>$q], ['start'=>$q+1, 'end'=>$r]);
    }

    private function merge(&$arr, &$info, $nums_p, $nums_q)
    {
        $tmpInfo = [$nums_p, $nums_q];
        $info[] = $tmpInfo;
        $tmp = [];
        $i = $nums_p['start'];
        $j = $nums_q['start'];
        $k = 0;
        while($i <= $nums_p['end'] && $j <= $nums_q['end']) {
            if($arr[$i] <= $arr[$j]) {
                $tmp[$k++] = $arr[$i++];
            }else {
                $tmp[$k++] = $arr[$j++];
            }
        }
        if($i <= $nums_p['end']) {
            for(; $i <=$nums_p['end']; $i++) {
                $tmp[$k++] = $arr[$i];
            }
        }
        if($j <= $nums_q['end']) {
            for(; $j <=$nums_q['end']; $j++) {
                $tmp[$k++] = $arr[$j];
            }
        }
        for ($x = 0; $x < $k; $x++) {
            $arr[$nums_p['start'] + $x] = $tmp[$x];
        }
    }
}