<?php


namespace app\modules\study;


class Worker
{
    public static function changeWorker($event) {
        echo '部门通知了员工：'.$event->deptId.'变了'."<br>";
    }
}