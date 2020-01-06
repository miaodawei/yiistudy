<?php


namespace app\modules\study;


class Kaoqin
{
    public static function changeWork($event) {
        echo '部门通知了考勤：'.$event->deptId.'变了'."<br>";
    }
}