<?php
define("Upload", "web/upload/");
function formatPrint($var, bool $return = true)
{
    $res = '<pre>' . print_r($var, true) . '</pre>';
    if ($return)
        return $res;
    echo $res;
}
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
