<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionIndex($message = 'hello world')
    {
        echo $message . "\n";

        return ExitCode::OK;
    }


    public function actionTest()
    {
        $key = 'test_11';
        $key2 = 'test_22';
        $redis = \Yii::$app->redis_web;
        $redis->rpush($key, 1);
        $redis->rpush($key, 2);
        $redis->rpush($key, 3);
        $redis->rpush($key, 4);
        $user1 = $redis->lpop($key);
        $redis->rpush($key2, $user1);
        $user11 = $redis->lpop($key);
        $redis->rpush($key2, $user11);
        $user111 = $redis->lpop($key);
        $redis->rpush($key, $user111);
        while(true) {
            if($user2 = $redis->lpop($key2)) {
                $redis->lpush($key, $user2);
            }else {
                break;
            }
        }

    }
}
