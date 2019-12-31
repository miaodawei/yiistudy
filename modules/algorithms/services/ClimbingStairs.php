<?php
/**
 * 爬楼梯算法
 */


namespace app\modules\algorithms\services;



class ClimbingStairs
{
    /**
     * 动态规划
     * @param $n
     * @return int|mixed
     */
    public function climbingStairsByDynamicProgramming($n)
    {
        if($n == 1) {
            return 1;
        }
        $dp = [];
        $dp[1] = 1;
        $dp[2] = 2;
        for($i = 3; $i <= $n; $i ++) {
            $dp[$i] = $dp[$i - 1] + $dp[$i - 2];
        }
        return $dp[$n];
    }

    /**
     * 斐波那契数列
     * @param $n
     * @return int
     */
    public function climbingStairsByFibonacciSequence($n)
    {
        if($n == 1) {
            return 1;
        }
        $first = 1;
        $second = 2;
        $third = 0;
        for($i = 3; $i <= $n; $i ++) {
            $third = $first + $second;
            $first = $second;
            $second = $third;
        }
        return $third;
    }
}