<?php

namespace app\controllers;

use app\models\ArrayModel;
use Exception;
use yii\web\Controller;

class ArrayController extends Controller
{
    /**
     * @throws Exception if an appropriate source of randomness cannot be found.
     */
    public function actionIndex(int $N, int $min = 1, int $max = 999): string
    {
        $model = ArrayModel::Generate($N, $min, $max);
        return $this->render('generate', compact("model"));
    }

    public function actionSum($arr): string
    {
        $arr = explode('|', $arr);
        $model = ArrayModel::WithArray($arr);
        $model->sum();
        return $this->render('generate', compact("model"));
    }

    public function actionEdit($arr, int $power): string
    {
        $arr = explode('|', $arr);
        $model = ArrayModel::WithArray($arr);
        $model->power = $power;
        return $this->render('generate', compact('model'));
    }
}
