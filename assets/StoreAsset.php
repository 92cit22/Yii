<?php

namespace app\assets;

use yii\web\AssetBundle;

class StoreAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/web';
    public $css = [
        'css/store.css',
        'css/bootstrap.css',
    ];
    public $js = [
        'js/store/analytics.js',
        'js/store/jquery.js',
        //'js/store/bootstrap.js',
        //'js/store/nouislider.js',
        'js/store/sample.js',
        'js/store/js.js',
        'js/store/beacon.js',
    ];
}