<?php

namespace app\modules\study\controllers;

use app\modules\study\events\DepartmentChangeEvent;

class DepartmentController extends \yii\web\Controller
{
    const EVENT_DEPT_CHANGE = 'dept_change';

    public function __construct($id, $module, $config = [])
    {
        $this->on(self::EVENT_DEPT_CHANGE, ['app\modules\study\Kaoqin', 'changeWork']);
        $this->on(self::EVENT_DEPT_CHANGE, ['app\modules\study\Worker', 'changeWorker']);
        parent::__construct($id, $module, $config);
    }

    public function actionIndex()
    {
        $event = new DepartmentChangeEvent();
        $event->deptId = 1;
        return $this->trigger(self::EVENT_DEPT_CHANGE, $event);
    }

}
