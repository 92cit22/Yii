<?php
namespace app\controllers;

use yii\web\Controller;

class FirstController extends Controller
{
    public function actions()
    {
        return [
            "newr" => [
                'class' => "app\actions\\newr"   
            ]
        ];
    }
    public function actionIndex()
    {
        echo "text";
    }
}
