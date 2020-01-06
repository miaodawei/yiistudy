<?php


namespace app\modules\study\events;


use yii\base\Event;

class DepartmentChangeEvent extends Event
{
    public $deptId = 0;
}