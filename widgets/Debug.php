<?php

namespace app\widgets;

use yii\base\Widget;

class Debug extends Widget
{
    public static function Output($object): string
    {
        return "<pre>" . print_r($object, true) . "</pre>";
    }
}